@extends('header')

@section('title')
La psicología - Alappont
@endsection

<style>
#tab-nav {
  background: #333;
}
#tab-nav span.tabnav {
  display: inline-block;
  padding: 20px 10px;
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
#tab-nav span.active {
  background: #a03b31;
}

/* [CONTENTS] */
#tab-contents {
  padding: 15px;
}
#tab-contents div.tabtxt {
  display: none;
}
#tab-contents div.active {
  display: block;
}
</style>

<script>
var tab = {
  nav : null, // holds all tabs
  txt : null, // holds all text containers
  init : function () {
  // tab.init() : init tab interface

    // Get all tabs + contents
    tab.nav = document.getElementById("tab-nav").getElementsByClassName("tabnav");
    tab.txt = document.getElementById("tab-contents").getElementsByClassName("tabtxt");

    // Error checking
    if (tab.nav.length==0 || tab.txt.length==0 || tab.nav.length!=tab.txt.length) {
      console.log("ERROR STARTING TABS");
    } else {
      // Attach onclick events to navigation tabs
      for (var i=0; i<tab.nav.length; i++) {
        tab.nav[i].dataset.pos = i;
        tab.nav[i].addEventListener("click", tab.switch);
      }

      // Default - show first tab
      tab.nav[0].classList.add("active");
      tab.txt[0].classList.add("active");
    }
  },

  switch : function () {
  // tab.switch() : change to another tab

    // Hide all tabs & text
    for (var t of tab.nav) {
      t.classList.remove("active");
    }
    for (var t of tab.txt) {
      t.classList.remove("active");
    }

    // Set current tab
    tab.nav[this.dataset.pos].classList.add("active");
    tab.txt[this.dataset.pos].classList.add("active");
  }
};

window.addEventListener("load", tab.init);
</script>

@section('content')

<div  id="">
    


    

    <div class="tabtxt">
      <form action="{{route('analisis')}}"  method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv" id="csv">
        <button type="submit" >ANALIZAR</button>   
      </form>
    </div>


</div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/space10-community/conversational-form@1.0.1/dist/conversational-form.min.js" crossorigin></script>


<div>
<form id="" cf-form>

  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

</form> 

</div>

@endsection