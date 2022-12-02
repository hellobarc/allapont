@extends('footer')
@extends('header')

@section('title')
Repositorio de investigaciones | Alappont
@endsection

@section('content')

<?php

$unis = array (
  0 => 
  array (
    'enlace' => 'http://tesis.ucsm.edu.pe/repositorio/',
    'nombre' => 'Repositorio de Tesis - Universidad Católica de Santa María',
    'logo' => 'https://www.ucsm.edu.pe/wp-content/uploads/2019/12/Escudo-UCSM.png',
  ),
  1 => 
  array (
    'enlace' => 'http://repositorio.unsa.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital - UNSA',
    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/LOGO_UNSA.png',
  ),
  2 => 
  array (
    'enlace' => 'http://repositorio.ucv.edu.pe/',
    'nombre' => 'Repositorio de la Universidad César Vallejo',
    'logo' => 'https://www.ucv.edu.pe/wp-content/themes/ucv/images/ucv-logo.png',
  ),
  3 => 
  array (
    'enlace' => 'http://repositorio.uss.edu.pe/',
    'nombre' => 'Repositorio Institucional USS',
    'logo' => 'http://www.unilibre.edu.co/ori/images/convenios/2018/sipann-logo-1.png',
  ),
  4 => 
  array (
    'enlace' => 'https://repositorio.uct.edu.pe/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL DE LA UNIVERSIDAD CATÓLICA DE TRUJILLO BENEDICTO XVI ',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-catolica-de-trujillo.png',
  ),
  5 => 
  array (
    'enlace' => 'http://repositorio.autonoma.edu.pe/',
    'nombre' => 'Repositorio de la Universidad Autonoma del Perú',
    'logo' => 'http://repositorio.autonoma.edu.pe/image/logo-ua.png',
  ),
  6 => 
  array (
    'enlace' => 'https://repositorio.upeu.edu.pe/',
    'nombre' => 'Repositorio de la Universidad Peruana Unión',
    'logo' => 'https://www.upeu.edu.pe/wp-content/uploads/2020/03/Logo_upeu.svg',
  ),
  7 => 
  array (
    'enlace' => 'http://repositorio.uigv.edu.pe/',
    'nombre' => 'Repositorio Institucional - UIGV',
    'logo' => 'https://virtual.uigv.edu.pe/pluginfile.php/1/theme_mb2nl/logo/1593118658/logo_uigv.png',
  ),
  8 => 
  array (
    'enlace' => 'http://repositorio.unibagua.edu.pe/',
    'nombre' => 'DSpace Repository - UNIBAGUA',
    'logo' => 'https://unibagua.edu.pe/images/unifslb/index/logo.png',
  ),
  9 => 
  array (
    'enlace' => 'http://repositorio.untrm.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital - UNTRM',
    'logo' => 'https://www.untrm.edu.pe/templates/favourite/images/logo/logo-untrm-2018-web.svg',
  ),
  10 => 
  array (
    'enlace' => 'http://repositorio.utea.edu.pe/',
    'nombre' => 'Repositorio de Tesis de la UTEA',
    'logo' => 'https://utea.edu.pe/wp-content/uploads/2019/10/Logo-UTEA.png',
  ),
  11 => 
  array (
    'enlace' => 'http://repositorio.unamba.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital - UNAMBA',
    'logo' => 'https://www.universidadesgratuitas.com/wp-content/uploads/2018/08/Universidad-Nacional-Micaela-Bastidas-de-Apur%C3%ADmac.png',
  ),
  12 => 
  array (
    'enlace' => 'http://repositorio.unajma.edu.pe/',
    'nombre' => 'Repositorio UNAJMA',
    'logo' => 'http://www.unajma.edu.pe/sites/default/files/logo_unajma.png',
  ),
  13 => 
  array (
    'enlace' => 'http://repositorio.ulasalle.edu.pe/',
    'nombre' => 'Repositorio Institucional de la Universidad La Salle',
    'logo' => 'https://www.carrerasadistancia.com.pe/logos/original/logo-universidad-la-salle.png',
  ),
  14 => 
  array (
    'enlace' => 'http://repositorio.ucsp.edu.pe/',
    'nombre' => 'Repositorio Institucional de la Universidad Católica San Pablo',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-catolica-san-pablo.png',
  ),
  15 => 
  array (
    'enlace' => 'http://repositorio.unsch.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNSCH',
    'logo' => 'http://repositorio.unsch.edu.pe/themes/Mirage2//images/DSpace-logo-line.svg',
  ),
  16 => 
  array (
    'enlace' => 'http://repositorio.unah.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNAH',
    'logo' => 'https://www.unah.edu.pe/wp-content/uploads/2021/02/logounah.png',
  ),
  17 => 
  array (
    'enlace' => 'http://investigacion.unc.edu.pe/investigacion/?page_id=1366',
    'nombre' => 'REPOSITORIO INSTITUCIONAL - UNC',
    'logo' => 'https://www.unc.edu.pe/wp-content/uploads/2021/02/LOGO_UNC.png',
  ),
  18 => 
  array (
    'enlace' => 'http://repositorio.unach.edu.pe/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL UNIVERSIDAD NACIONAL AUTONOMA DE CHOTA',
    'logo' => 'https://www.unach.edu.pe/sisacad/images/logo.png',
  ),
  19 => 
  array (
    'enlace' => 'http://repositorio.unj.edu.pe/',
    'nombre' => 'Repositorio - UNJ',
    'logo' => 'https://unj.edu.pe/templates/universidad.nacional.de.jaen/images/logo.universidad.nacional.jaen.png',
  ),
  20 => 
  array (
    'enlace' => 'http://repositorio.unac.edu.pe/',
    'nombre' => 'Repositorio UNAC',
    'logo' => 'https://estudiaperu.pe/wp-content/uploads/2020/01/unac-300x126.png',
  ),
  21 => 
  array (
    'enlace' => 'http://repositorio.unsaac.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNSAAC',
    'logo' => 'https://estudiaperu.pe/wp-content/uploads/2019/06/Universidad-Nacional-San-Antonio-Abad-del-Cusco-300x164.jpg',
  ),
  22 => 
  array (
    'enlace' => 'http://repositorio.uandina.edu.pe/',
    'nombre' => 'Repositorio Digital Universidad Andina del Cusco',
    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/c/cb/LogoUAC_2.png',
  ),
  23 => 
  array (
    'enlace' => 'http://repositorio.uniq.edu.pe/',
    'nombre' => 'Repositorio - UNIQ',
    'logo' => 'https://www.uniq.edu.pe/static/media/Logo_uniq.522314d0.png',
  ),
  24 => 
  array (
    'enlace' => 'http://repositorio.udea.edu.pe/',
    'nombre' => 'Repositorio UDEA',
    'logo' => 'https://udea.edu.pe/wp-content/uploads/2019/05/log_on_final.png',
  ),
  25 => 
  array (
    'enlace' => 'http://repositorio.unh.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNH',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-nacional-de-huancavelica.png',
  ),
  26 => 
  array (
    'enlace' => 'https://repositorio.unat.edu.pe/',
    'nombre' => 'Repositorio - UNAT',
    'logo' => 'https://unat.edu.pe/wp-content/uploads/2019/10/logo_home.png',
  ),
  27 => 
  array (
    'enlace' => 'http://repositorio.unheval.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNHEVAL',
    'logo' => 'https://www.unheval.edu.pe/biblioteca/wp-content/uploads/2019/08/logo2-300x75.png',
  ),
  28 => 
  array (
    'enlace' => 'http://repositorio.udh.edu.pe/',
    'nombre' => 'Repositorio Institucional - UDH',
    'logo' => 'http://islasdepazperu.org/wp-content/uploads/2018/11/logo-universidad-de-huanuco-300x142.png',
  ),
  29 => 
  array (
    'enlace' => 'http://repositorio.unas.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNAS',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-nacional-agraria-de-la-selva.png',
  ),
  30 => 
  array (
    'enlace' => 'http://repositorio.autonomadeica.edu.pe/',
    'nombre' => 'Repositorio institucional UNIVERSIDAD AUTONOMA DE ICA',
    'logo' => 'https://autonomadeica.edu.pe/images/logo-negro.png',
  ),
  31 => 
  array (
    'enlace' => 'https://www.uniscjsa.edu.pe/repositorio',
    'nombre' => 'Repositorio -UNISCJSA',
    'logo' => 'https://www.uniscjsa.edu.pe/wp-content/uploads/2016/06/logo3.png',
  ),
  32 => 
  array (
    'enlace' => 'http://repositorio.upla.edu.pe/',
    'nombre' => 'Repositorio Institucional - UPLA',
    'logo' => 'https://s3-us-west-2.amazonaws.com/queestudiar/image/institution/upla.jpg',
  ),
  33 => 
  array (
    'enlace' => 'http://repositorio.uroosevelt.edu.pe/xmlui/',
    'nombre' => 'Repositorio de la Universidad Privada de Huancayo Franklin Roosevelt',
    'logo' => 'https://image.ibb.co/mVi1an/LOGO_UROOSEVELT_01_fw.png',
  ),
  34 => 
  array (
    'enlace' => 'http://repositorio.uncp.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNCP',
    'logo' => 'https://4.bp.blogspot.com/-RdXvzmGD4Xo/Vu9N2uz545I/AAAAAAAAC7o/RylaIBZbQXQiKmZ5MvD0nScIFEmc4VDeg/s200/UNCP.jpeg',
  ),
  35 => 
  array (
    'enlace' => 'https://repositorio.continental.edu.pe/',
    'nombre' => 'Repositorio Institucional Continental',
    'logo' => 'http://upsb.edu.pe/wp-content/uploads/2019/07/logo-universidad-continental-uc.png',
  ),
  36 => 
  array (
    'enlace' => 'http://repositorio.unaat.edu.pe/',
    'nombre' => 'Repositorio UNAAT',
    'logo' => 'https://iconape.com/wp-content/png_logo_vector/universidad-nacional-autonoma-altoandina-de-tarma-logo.png',
  ),
  37 => 
  array (
    'enlace' => 'https://dspace.unitru.edu.pe/',
    'nombre' => 'Repositorio - UNITRU',
    'logo' => 'https://www.unitru.edu.pe/Recursos/img-unt/logo-unt1.png',
  ),
  38 => 
  array (
    'enlace' => 'http://repositorio.upao.edu.pe/',
    'nombre' => 'Repositorio Digital de la Universidad Privada Antenor Orrego',
    'logo' => 'http://repositorio.upao.edu.pe/image/upao_logo2011.jpg',
  ),
  39 => 
  array (
    'enlace' => 'https://repositorio.upn.edu.pe/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL UPN',
    'logo' => 'https://repositorio.upn.edu.pe/themes/Mirage2/images/DSpace-logo-line.svg',
  ),
  40 => 
  array (
    'enlace' => 'http://repositorio.usat.edu.pe/',
    'nombre' => 'Repositorio Institucional USAT',
    'logo' => 'http://repositorio.usat.edu.pe/image/logousat.png',
  ),
  41 => 
  array (
    'enlace' => 'http://repositorio.unab.edu.pe/',
    'nombre' => 'Repositorio Institucional de la UNAB',
    'logo' => 'https://www.perutrabajos.com/organizaciones/trabajos-UNIVERSIDAD-DE-BARRANCA-UNAB.png',
  ),
  42 => 
  array (
    'enlace' => 'http://repositorio.undc.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNDC',
    'logo' => 'https://undc.edu.pe/portal/wp-content/uploads/2019/12/logo.jpg',
  ),
  43 => 
  array (
    'enlace' => 'http://repositorio.unjfsc.edu.pe/',
    'nombre' => 'Repositorio UNJFSC',
    'logo' => 'http://www.unjfsc.edu.pe/biblioplax/gestion/img/presentacion.png',
  ),
  44 => 
  array (
    'enlace' => 'http://repositorio.ftpcl.edu.pe/',
    'nombre' => 'Repositorio de la Facultad de Teología Pontificia y Civil de Lima',
    'logo' => 'https://blancafernandez.webcindario.com/imagenes1/logo2.png',
  ),
  45 => 
  array (
    'enlace' => 'http://repositorio.unfv.edu.pe/',
    'nombre' => 'Repositorio Institucional UNFV',
    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/b/b5/Logo_UNFV.png',
  ),
  46 => 
  array (
    'enlace' => 'https://repositorio.une.edu.pe/',
    'nombre' => 'Repositorio Institucional - UNE',
    'logo' => 'https://www.carrerasadistancia.com.pe/logos/original/logo-universidad-nacional-de-educacion-enrique-guzman-y-valle.png',
  ),
  47 => 
  array (
    'enlace' => 'http://repositorio.uwiener.edu.pe/xmlui/',
    'nombre' => 'Repositorio Digital UWIENER',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-norbert-wiener.png',
  ),
  48 => 
  array (
    'enlace' => 'https://investigacion.upsjb.edu.pe/repositorio-institucional/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL',
    'logo' => 'https://landing.upsjb.edu.pe/hubfs/logo-Nov-15-2020-09-10-40-79-PM.png',
  ),
  49 => 
  array (
    'enlace' => 'http://repositorio.upal.edu.pe/',
    'nombre' => 'Repositorio de la Universidad Privada Peruano Alemana',
    'logo' => 'https://upal.edu.pe/wp-content/uploads/2020/11/Logos-6-1.svg',
  ),
  50 => 
  array (
    'enlace' => 'http://repositorio.utp.edu.pe/',
    'nombre' => ' Repositorio Institucional de la UTP',
    'logo' => 'http://dta.utp.edu.pe/wp-content/uploads/2014/08/logo-utp.png',
  ),
  51 => 
  array (
    'enlace' => 'https://www.ulcb.edu.pe/categoria/repositorios-ulcb',
    'nombre' => 'Repositorio Institucional - ULCB',
    'logo' => 'https://www.ulcb.edu.pe/repositorioaps/data/1/1/1/zon/zona-header-top/images/logo02_ulcb.png',
  ),
  52 => 
  array (
    'enlace' => 'http://repositorio.uma.edu.pe/',
    'nombre' => 'Repositorio de la Universidad María Auxiliadora',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-maria-auxiliadora.png',
  ),
  53 => 
  array (
    'enlace' => 'http://repositorio.ucss.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital UCSS',
    'logo' => 'http://www.ucss.edu.pe/images/logo/logo-ucss.jpg',
  ),
  54 => 
  array (
    'enlace' => 'http://repositorio.untels.edu.pe/jspui/',
    'nombre' => 'Repositorio Institucional UNTELS',
    'logo' => 'https://1.bp.blogspot.com/-0yrMkbL5X68/WYuNITNH7pI/AAAAAAAA_Vg/4jXBXf1u6ukfYXDCHc7j1SjvLNx9Zbs-wCLcBGAs/s1600/untels-logo.jpg',
  ),
  55 => 
  array (
    'enlace' => 'http://repositorio.bausate.edu.pe/',
    'nombre' => 'Repositorio Institucional - UJBM',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-jaime-bausate-y-meza.png',
  ),
  56 => 
  array (
    'enlace' => 'http://repositorio.gerens.edu.pe/',
    'nombre' => 'Repositorio de la Escuela de Postgrado Gerens',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-escuela-de-postgrado-gerens.png',
  ),
  57 => 
  array (
    'enlace' => 'https://investigacion.cientifica.edu.pe/repositorio-institucional/',
    'nombre' => 'Repositorio institucional - Universidad Científica del Sur',
    'logo' => 'https://estudiaperu.pe/wp-content/uploads/2020/03/Universidad-Cient%C3%ADfica-del-Sur-Admisi%C3%B3n.png',
  ),
  58 => 
  array (
    'enlace' => 'https://repositorio.esan.edu.pe/',
    'nombre' => 'Repositorio Institucional - ESAN',
    'logo' => 'https://repositorio.esan.edu.pe/themes/Mirage2//images/logo-esan.jpg',
  ),
  59 => 
  array (
    'enlace' => 'https://cybertesis.unmsm.edu.pe/',
    'nombre' => 'Cybertesis Repositorio de Tesis Digitales - UNMSM',
    'logo' => 'https://estudiaperu.pe/wp-content/uploads/2019/10/UNMSM-300x119.png',
  ),
  60 => 
  array (
    'enlace' => 'http://cybertesis.uni.edu.pe/',
    'nombre' => 'Repositorio Institucional Universidad Nacional de Ingienería',
    'logo' => 'http://cybertesis.uni.edu.pe/image/logo-UNI-con-tipo.png',
  ),
  61 => 
  array (
    'enlace' => 'https://repositorio.uch.edu.pe/',
    'nombre' => 'Repositorio Institucional - UCH',
    'logo' => 'https://www.uch.edu.pe/sites/default/files/uchweb_0.png',
  ),
  62 => 
  array (
    'enlace' => 'https://repositorio.umch.edu.pe/',
    'nombre' => 'Repositorio UMCH',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-marcelino-champagnat.png',
  ),
  63 => 
  array (
    'enlace' => 'http://repositorio.usil.edu.pe/',
    'nombre' => 'Repositorio Institucional de la Universidad San Ignacio de Loyola',
    'logo' => 'https://pbs.twimg.com/profile_images/3055134045/3caa59d5270185dbe2110717211260a0.png',
  ),
  64 => 
  array (
    'enlace' => 'https://repositorioacademico.upc.edu.pe/',
    'nombre' => 'Repositorio Académico UPC',
    'logo' => 'https://tftransporteinternacional.files.wordpress.com/2014/06/76b3b-logoupc.png',
  ),
  65 => 
  array (
    'enlace' => 'http://repositorio.usmp.edu.pe/',
    'nombre' => 'Repositorio USMP',
    'logo' => 'https://i.pinimg.com/originals/4b/c8/43/4bc843e6e3b471874f761a2755a73231.jpg',
  ),
  66 => 
  array (
    'enlace' => 'http://repositorio.uarm.edu.pe/',
    'nombre' => 'Repositorio UARM',
    'logo' => 'https://www.uarm.edu.pe/FondoMontoya/images/logo.png',
  ),
  67 => 
  array (
    'enlace' => 'http://repositorio.lamolina.edu.pe/',
    'nombre' => 'Repositorio Institucional Universidad Nacional Agraria La Molina',
    'logo' => 'https://digital.fontagro.org/wp-content/uploads/2020/06/la-molina-logo-300x160.png',
  ),
  68 => 
  array (
    'enlace' => 'https://repositorio.urp.edu.pe/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL - URP',
    'logo' => 'https://i.pinimg.com/originals/56/b2/c0/56b2c0d00c9b6e6c6b5bae5f3385ba02.png',
  ),
  69 => 
  array (
    'enlace' => 'http://repositorio.unife.edu.pe/repositorio/',
    'nombre' => 'Repositorio Institucional UNIFÉ',
    'logo' => 'https://innovacionambiental.com/wp-content/uploads/2020/05/unife.jpg',
  ),
  70 => 
  array (
    'enlace' => 'https://repositorio.ucal.edu.pe/',
    'nombre' => 'Repositorio UCAL',
    'logo' => 'https://repositorio.ucal.edu.pe/themes/Mirage2/images/dspace-logo-only.png',
  ),
  71 => 
  array (
    'enlace' => 'http://repositorio.upch.edu.pe/',
    'nombre' => 'Repositorio - UPCH',
    'logo' => 'https://www.cayetano.edu.pe/cayetano/images/2018/Logo_Oficial.png',
  ),
  72 => 
  array (
    'enlace' => 'https://repositorio.up.edu.pe/',
    'nombre' => 'Repositorio de la Universidad del Pacífico',
    'logo' => 'https://cocep.org.pe/wp-content/uploads/2018/06/UP_wordpress.png',
  ),
  73 => 
  array (
    'enlace' => 'https://repositorio.ulima.edu.pe/',
    'nombre' => 'Repositorio Institucional ULima',
    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Universidad_de_Lima_logo.png',
  ),
  74 => 
  array (
    'enlace' => 'http://repositorio.pucp.edu.pe/index/',
    'nombre' => 'Repositorio Institucional de la PUCP',
    'logo' => 'https://ares.pucp.edu.pe/pucp/jsp/images/cabecera-pucp-2017.png',
  ),
  75 => 
  array (
    'enlace' => 'https://repositorio.utec.edu.pe/',
    'nombre' => 'Repositorio Institucional UTEC',
    'logo' => 'https://repositorio.utec.edu.pe/image/logo.png',
  ),
  76 => 
  array (
    'enlace' => 'http://www.unaaa.edu.pe/portal/public/#',
    'nombre' => 'Investigación - UNAAA',
    'logo' => 'http://unaaa.edu.pe/imagen/general/210720104959_210709175254-logo-superior.png',
  ),
  77 => 
  array (
    'enlace' => 'http://repositorio.unapiquitos.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital (RID) de la Universidad Nacional de la Amazonia Peruana',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-nacional-de-la-amazonia-peruana.png',
  ),
  78 => 
  array (
    'enlace' => 'http://repositorio.unamad.edu.pe/',
    'nombre' => 'Repositorio Institucional Universidad Nacional Amazónica de Madre de Dios',
    'logo' => 'https://www.unamad.edu.pe/images/escudo_unamad_trans.png',
  ),
  79 => 
  array (
    'enlace' => 'https://repositorio.unam.edu.pe/',
    'nombre' => 'Repositorio Institucional Digital - Universidad Nacional de Moquegua',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-nacional-de-moquegua.png',
  ),
  80 => 
  array (
    'enlace' => 'http://repositorio.undac.edu.pe/',
    'nombre' => 'Repositorio Institucional UNDAC',
    'logo' => 'http://repositorio.undac.edu.pe/image/portada.png',
  ),
  81 => 
  array (
    'enlace' => 'http://repositorio.unp.edu.pe/',
    'nombre' => 'DSpace Repository - UNP',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-nacional-de-piura.png',
  ),
  82 => 
  array (
    'enlace' => 'https://pirhua.udep.edu.pe/',
    'nombre' => 'Repositorio Institucional de la Universidad de Piura',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-de-piura.png',
  ),
  83 => 
  array (
    'enlace' => 'http://repositorio.unf.edu.pe/',
    'nombre' => 'Repositorio Dspace - Universidad Nacional de Frontera',
    'logo' => 'https://i.pinimg.com/originals/cd/d8/aa/cdd8aa5e301abb5bbcc6341359b88955.png',
  ),
  84 => 
  array (
    'enlace' => 'http://repositorio.unap.edu.pe/',
    'nombre' => 'REPOSITORIO INSTITUCIONAL DIGITAL DE LA UNIVERSIDAD NACIONAL DEL ALTIPLANO',
    'logo' => 'https://sic.unap.edu.pe/images/themes/unap/logo.png',
  ),
  85 => 
  array (
    'enlace' => 'http://repositorio.unaj.edu.pe/',
    'nombre' => 'Repositorio UNAJ',
    'logo' => 'http://unaj.edu.pe/web2/wp-content/themes/UNAJ_OTI/images/logo@2x.png',
  ),
  86 => 
  array (
    'enlace' => 'http://repositorio.unsm.edu.pe/',
    'nombre' => 'Repository - Universidad Nacional de San Martín',
    'logo' => 'https://unsm.edu.pe/wp-content/uploads/2019/01/Logo-UNSM.png',
  ),
  87 => 
  array (
    'enlace' => 'http://repositorio.neumann.edu.pe/',
    'nombre' => 'Repositorio Institucional Neumann',
    'logo' => 'https://www.epneumann.edu.pe/wp-content/uploads/2018/09/Logo-Ep-Neumann-1.png',
  ),
  88 => 
  array (
    'enlace' => 'http://repositorio.unjbg.edu.pe/',
    'nombre' => 'Repository - Universidad Nacional Jorge Basadre Grohmann',
    'logo' => 'https://revistas.unjbg.edu.pe/inicio/img/logo-UNJBG-Para%20cabecera-portal-revistas.png',
  ),
  89 => 
  array (
    'enlace' => 'http://repositorio.upt.edu.pe/',
    'nombre' => 'Repositorio de la Universidad Privada de Tacna',
    'logo' => 'https://carrerasuniversitarias.pe/logos/original/logo-universidad-privada-de-tacna.png',
  ),
  90 => 
  array (
    'enlace' => 'http://repositorio.untumbes.edu.pe/',
    'nombre' => 'Repositorio UNTUMBES - Universidad Nacional de Tumbes',
    'logo' => 'http://www.untumbes.edu.pe/untumbes-m/wp-content/uploads/2020/03/logos.png',
  ),
  91 => 
  array (
    'enlace' => 'http://repositorio.unu.edu.pe/',
    'nombre' => 'Repositorio Institucional UNU',
    'logo' => 'https://www.unu.edu.pe/portal/images/unu.png',
  ),
  92 => 
  array (
    'enlace' => 'http://repositorio.unia.edu.pe/',
    'nombre' => 'Repositorio UNIA',
    'logo' => 'https://unia.edu.pe/wp-content/uploads/2020/11/Logo-UNIA-copy.png',
  ),
  93 => 
  array (
    'enlace' => 'http://repositorio.unasam.edu.pe/',
    'nombre' => 'Repositorio UNASAM',
    'logo' => 'https://1.bp.blogspot.com/-AReqO7s5Gao/V_q0Iw-widI/AAAAAAAAKoI/Dgs8Tl35074o1r1Hiysnu_SltqqwjBmAQCLcB/s400/Escudo_de_la_UNASAM.png',
  ),
  94 => 
  array (
    'enlace' => 'http://repositorio.uns.edu.pe/',
    'nombre' => 'Repositorio Institucional de la Universidad Nacional del Santa',
    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Universidad_Nacional_del_Santa_Logo.png',
  ),
);

?>

<div class="uk-text-left" style="padding: 5px; background:#3F3F3F; color: #f0f2f5;" >
    <!--<span style="font-size:16px; color: #f0f2f5;" class=" uk-button-link uk-text-uppercase " type="button" >Alappont <i class="fa fa-external-link"  style="font-size:16px;"></i> </span>-->
    <span style="font-size:16px;" class="uk-text-uppercase"> herramientas</span>
    <span style="font-size:16px;" class="uk-text-uppercase"> / repositorio</span>
    <!--<span style="font-size:16px;" >{ { $cuotas->links() } }</span>-->
</div>

<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Directorio de repositorios de investigación</a></h2>
        <hr class="">

        <div class="uk-alert-success " uk-alert style="background:#f0f2f5 !important; color:#000 !important; border-radius: 10px;">
            
            <p style="font-size: 110%; "  >Si deseas asesorías personalizada sobre cómo realizar los antecedentes de tu investigación contáctate con nosotros 
                <a class=" uk-button-text"   target="_blank" style="color:#000 !important;" href="https://api.whatsapp.com/send?phone=51959040954&text=Deseo más información sobre cómo realizar los antecedentes de mi investigación" >aquí <i class="fa fa-external-link" aria-hidden="true"></i></a>
        </div>





        
        <p>Cuando realizas una investigación debes conocer cuales estudios han precedido al tuyo, ya sea porque abordan un tema similar, porque la metodología empleada es como la tuya o porque los instrumentos son iguales a los que piensas emplear. Como sea, es importante que te documentes sobre el “estado del arte” de tu tema de investigación.</p>

        <p>A continuación, te proporcionamos una lista con los repositorios de todas las universidades peruanas para que puedas buscar tus antecedentes.</p>


        <hr class="">  


        <div class="margin-inv-serv" style="margin-top:50px; border: solid 1px #3E4042; border-radius:10px; ">
            <div style="padding: 10px; " >
                <div class="uk-text-left  " style="border-left: solid 5px #3E4042; padding-left:15px;" >
                    <h2 class="" style="margin:0px">Repositorio de universidades peruanas</h2>
                </div>
            </div>
        </div>

        <table class="uk-table uk-table-middle uk-table-divider">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Universidad</th>
                    <!---
                    <th>Logo</th>
                    --->
                </tr>
            </thead>

            <tbody>

            @foreach ($unis as $uni)
            <tr >
                <td>{{ $loop->iteration}}</td>
                <td onclick="window.open('{{$uni['enlace']}}', '_blank');" class="manoAzul uk-text-uppercase">{{$uni['nombre']}}</td>
                <!---
                <td onclick="window.open('{ {$uni['enlace']}}', '_blank');" class="manoAzul" style=" "><img style="border-radius:10px; padding:5px; background:#fff; margin:10px;"  src="{ {$uni['logo']}}" alt="Logo" width="150" height="100"></td>
                --->
            </tr>
                
            @endforeach



            </tbody>
        </table>


    </article>

</div>


@endsection