@extends('layout')
@section('title','Photogallery')
@section('Header')
<x-pheader/>
@endsection
@section('container')
<div id="wrapper">

<div class="clear"></div>
<div id="leftcolumn">
  <h3>Resources</h3>
  <ul>
    <li><a href="pphotogallery">Photo Gallery</a></li>
    <!--<li><a href="videogallery">Video Gallery</a></li>-->
  </ul>
</div>
<div id="rightcolumn">
  <h1 align="justify">Photo Gallery</h1>
  <span style="color: red;">{{session('Upload')}}</span>

 
 
    


<!--<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>-->


  <table width="100%" border="0" cellpadding="0" cellspacing="8">
  <form method="post" action="Uploadimage" enctype="multipart/form-data">
  {{@csrf_field()}}
  <table>
  <th>Upload new image</th>

    <input type="file" name="image">
    <input type="Submit" name="submitimg" value="Upload"  >
    
    </tr>
    
  </table>
  </form>
  

  <tr height="25px">
       <td width="25"></td>
      
       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (1).jpg" class="img"  width="325" height="325"  /></a>  </td>
       <td width="20">&nbsp;</td>

       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (2).jpg" class="img"  width="325" height="325"  /></a>    </td>

       <td width="14">&nbsp;</td>
    </tr>


     
  <tr height="25px">
      <td width="25"></td>
     
      <td width="161"  class="photo"></td> 
      <td width="20">&nbsp;</td>
      <td width="161"  class="photo"> </td>
      <td width="14"> </td>
  </tr>

    <tr height="25px">
       <td width="25"></td>
      
       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (3).jpg" class="img"  width="325" height="325"  /></a>  </td>
       <td width="20">&nbsp;</td>

       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (4).jpg" class="img"  width="325" height="325"  /></a>    </td>

       <td width="14">&nbsp;</td>
    </tr>


     
  <tr height="25px">
      <td width="25"></td>
     
      <td width="161"  class="photo"> </td> 
      <td width="20">&nbsp;</td>
      <td width="161"  class="photo">  </td>
      <td width="14"> </td>
  </tr>

      <tr height="25px">
       <td width="25"></td>
      
       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (5).jpg" class="img"  width="325" height="325"  /></a>  </td>
       <td width="20">&nbsp;</td>

       <td width="161" valign="top"><a href="#"> <img src="images/Container/DSC_1 (6).jpg" class="img"  width="325" height="325"  /></a>    </td>

       <td width="14">&nbsp;</td>
    </tr>


     
  <tr height="25px">
      <td width="25"></td>
     
      <td width="161"  class="photo"> </td> 
      <td width="20">&nbsp;</td>
      <td width="161"  class="photo">  </td>
      <td width="14"> </td>
  </tr>

    <tr height="25px">
       <td width="25"></td>
       
       <td width="161" valign="top"><a href="#">
       <img src="images/Container/DSC_1 (7).jpg" class="img"  width="325" height="325"  /></a>    </td>
       <td width="20">&nbsp;</td>

       <td width="161" valign="top"><a href="#">
       <img src="images/Container/DSC_1 (8).jpg" class="img"  width="325" height="325"  /></a>    </td>

       <td width="14">&nbsp;</td>
    </tr>


     
  <tr height="25px">
      <td width="25"></td>
     
      <td width="20">&nbsp;</td>
      <td width="161"  class="photo">  </td>
      <td width="14"  </td>
  </tr>


     <tr height="25px">
       <td width="25"></td>
      
       <td width="161" valign="top"><a href="#">
       <img src="images/Container/DSC_1 (9).jpg" class="img"  width="325" height="325"  /></a>    </td>
       <td width="20">&nbsp;</td>
       
       
    </tr>


     
  
  </table></div>

<div class="clear"></div>

<x-footer/>
@endsection

 
