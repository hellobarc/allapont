# -*- coding: utf-8 -*-
"""
Created on Mon Nov  8 11:30:22 2021

@author: Luis Alejandro Málaga Allca
"""


#Usar CSV  al momento de exportar de SQL
#1.Se corren los paquetes
import pandas as pd

#2. Se importa la base de datos
#Generar la final del SQL
#Requiere de actualización de base de datos
data = pd.read_csv('registros.csv')

#3. Se requiere de los ID de las tesis seleccionadas n=412
#No requiere de actualizar base de datos - Es final
tesis = pd.read_csv('investigacions.csv' )
tesis_id = tesis[tesis['criterios']=='Si cumple']['tesis_id']
tesis_id = pd.DataFrame(tesis_id)

#Este código es más pertinente
tesis_identificador = data['tesis_id'].unique()
tesis_identificador = pd.DataFrame(tesis_identificador)
tesis_identificador.columns = ['tesis_id']


#4. Se requiere la base de datos que contiene el nombre de la tecnica
#Requiere de actualización de base de datos
tecnica_data = pd.read_csv('tecnicas.csv' )


#5. Se requiere importar la base de errores
errores_data = pd.read_csv('tabla_errors.csv' )


"""
Tecnicas Recuento
"""
#Genera un diccionario por cada tesis que contiene las tecnicas unicas que se usaron en esa tesis
tecnicas_agrupadas = {}
for i in tesis_identificador['tesis_id']:
    
    #Esto hace que se selecione una unica 'tecnica_id' por cada tesis
    ##Si en una tesis se ha registrado más de una vez el uso de una misma tecnica
    ##pero en distintas partes del coumento, solo se cuenta como una sola técnica para el recuento.
    tecnica_unica = data[data['tesis_id']==i]['tecnica_id'].unique()
    
    #Almacena cada tecnica en el diccionario
    tecnicas_agrupadas[i] = tecnica_unica


tecnicas = []
for i in tesis_identificador['tesis_id']:
    tecnicas.extend(tecnicas_agrupadas[i])
      
tecnicas = pd.DataFrame(tecnicas)
tecnicas.columns = ['tecnica_id']


tecnicas_names_col = []
for i in tecnicas['tecnica_id']:
    for e in tecnica_data.itertuples():
        if e[1] == i : tecnicas_names_col.append(e[4])
tecnicas_names_col = pd.DataFrame(tecnicas_names_col)
tecnicas_names_col.columns = ['tecnica_name']    


#Exportar las tecnicas empleadas
tecnicas_para_analisis = pd.concat([tecnicas, tecnicas_names_col ], axis=1)
tecnicas_para_analisis.to_excel('tecnicas_para_analisis.xlsx', index = False)




"""
Tecnicas por lugar del documento
"""
#Selecciona la columna lugar
lugar = data['lugar']

#Selecciona los casos únicos
lugar = lugar.unique()

#Convierte en un DataFrame a lugar y le pone el nombre a la columna
lugar = pd.DataFrame(lugar)
lugar.columns = ['lugar']

#Genera un diccionario por cada lugar que contiene las tecnicas unicas que se usaron en esa tesis
#Me indica el número de procedimientos únicos por cada lugar


#Obtiene los procedimientos divididos por cada lugar

#Genera un diccionario con las tecnicas agrupadas por lugar
lugar_tecnica = {}
for i in lugar['lugar']:
    lugar_tecnica[i] = data[data['lugar']==i]


#Obtener, por cada lugar, una tecnica unica por tesis
tecnica_unica_tesis_lugar = {}
for i in lugar['lugar']:
    tecnica_dict = {}
    for j in tesis_identificador['tesis_id']:
        tecnica_unica_lugar_tesis = lugar_tecnica[i][lugar_tecnica[i]['tesis_id']==j]['tecnica_id'].unique()
        tecnica_dict[j] =  tecnica_unica_lugar_tesis
        tecnica_unica_tesis_lugar[i] = tecnica_dict




tecnicas_lugar = []
lugar_col = []
for i in lugar['lugar']:
    key = pd.DataFrame(tecnica_unica_tesis_lugar[i].keys())
    key.columns = ['tesis_id']
    
    for j in key['tesis_id']:
        tecnicas_lugar.extend(tecnica_unica_tesis_lugar[i][j])
        
        for e in range(len(tecnica_unica_tesis_lugar[i][j])):
             lugar_col.append(i)
        


tecnicas_lugar = pd.DataFrame(tecnicas_lugar)
tecnicas_lugar.columns = ['tecnica_id']   



tecnicas_names_col_lugar = []
for i in tecnicas_lugar['tecnica_id']  :
    for e in tecnica_data.itertuples():
        if e[1] == i : tecnicas_names_col_lugar.append(e[4])
tecnicas_names_col_lugar = pd.DataFrame(tecnicas_names_col_lugar)
tecnicas_names_col_lugar.columns = ['tecnica_name']    


lugar_col = pd.DataFrame(lugar_col)


tecnicas_por_lugar = pd.concat([lugar_col, tecnicas_lugar, tecnicas_names_col_lugar], axis=1)    
tecnicas_por_lugar.to_excel('tecnicas_por_lugar.xlsx', index = False)    
       




"""
Hallar los errores por técnica
"""
# Eliminar lo que no son errores 000
errores_filtrados = []
for i in errores_data['error'] :
    if i.find('000') != -1 : errores_filtrados.append(0)
    if i.find('000') == -1 : errores_filtrados.append(1)
errores_filtrados = pd.DataFrame(errores_filtrados)
errores_filtrados.columns = ['remover']

errores_filtrados_data_noremove = pd.concat([errores_data, errores_filtrados], axis=1)
errores_filtrados_data = errores_filtrados_data_noremove[errores_filtrados_data_noremove.remover != 0]


anotador = []
for i in data['error_id'] :
    var = i in errores_filtrados_data.error_id.values
    if var == True  : anotador.append(1)
    if var == False : anotador.append(0) 

anotador = pd.DataFrame(anotador)
anotador.columns = ['anotador']

data_con_errores = pd.concat([data, anotador], axis=1)
data_con_errores_fin = data_con_errores[data_con_errores.anotador != 0]
data_con_errores_fin = data_con_errores_fin.reset_index()

#Agregar nombre de los errores
errores_add = []
for i in data_con_errores_fin['error_id']:
    for e in errores_data.itertuples():
        if i == e[1] : errores_add.append(e[2])
errores_add = pd.DataFrame(errores_add)
errores_add.columns = ['errores_name']
errores_add = errores_add.reset_index()

data_con_errores_fin = pd.concat([data_con_errores_fin, errores_add], axis=1)    

tecnicas_add = []
for i in data_con_errores_fin['tecnica_id']:
    for e in tecnica_data.itertuples():
        if i == e[1] : tecnicas_add.append(e[4])
tecnicas_add = pd.DataFrame(tecnicas_add)        
tecnicas_add.columns = ['tecnica_name']
tecnicas_add = tecnicas_add.reset_index()

data_con_errores_fin = pd.concat([data_con_errores_fin, tecnicas_add], axis=1)    



data_con_errores_fin.to_excel('data_con_errores_fin.xlsx', index = False) 

data_con_errores_fin.to_excel('data_con_errores_fin.xlsx', index = False) 
  

#Genera un diccionario con las errores agrupadas por lugar y tecnica
lugar_tecnica_errores = {}
for i in lugar['lugar']:
    lugar_tecnica_errores[i] = data_con_errores_fin[data_con_errores_fin['lugar']==i]
"""

#Generar un diccionario con los erores agrupados por tecnica

tecnica_errores = {}
for i in lugar['lugar']:
    tecnica_errores[i] = data_con_errores_fin[data_con_errores_fin['tecnica_id']==i]

"""






