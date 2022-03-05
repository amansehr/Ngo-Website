@extends('layout')
@section('title','Login')
@section('Header')
<x-header/>
@endsection
@section('container')
<div id="wrapper">
        <div class="clear">
        </div>
        <p>
		<span style="color: green;"> {{session('msg')}}</span> 
            <form method="post" action="volunteer_submit">
            {{@csrf_field()}}
            
            
            <table style="width: 100%">
                <tr >
                    <td style="width: 30%">
                    </td>
                    <td style="width: 40%">
                        <table width="300px">
                            <tr>
                                <td align="center" class="headertext" colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="headertext" style="font-weight: bolder" colspan="2">
                                    Volunteer Details
                                    
                                </td>
                                <span style="color: red;">{{session('error')}}</span> 
                            </tr>
							
                            <tr style="width: 100%;">
                                <td class="subHeader">
                                   Name
                                </td>
                                <td class="subHeader">
                                    <input name="name" type="text" required style="width:150px;" />
                                    <br>

                                   
                                </td>
                            </tr>
                            <tr>
                                <td class="subHeader" valign="top">
                                    Father Name
                                </td>
                                <td class="subHeader">

                                   <input name="fathername" type="text" required style="width:150px;"  />
                                      
                                </td>
                            </tr>
                            <tr>
							<td class="subHeader" valign="top">
                                   Email
                                </td>
                                <td class="subHeader">

                                   <input name="email" type="email" required style="width:150px;"  />
                                      
                                  
                                </td>
							</tr>
							<tr>
							<td class="subHeader" valign="top">
                                    village
                                </td>
                                <td class="subHeader">

                                   <input name="village" type="text" required style="width:150px;"  />
                                       <!-- <br>
                                   < <span class="field_error"> 
                                        @error('password')
                                             {{$message}}
                                        @enderror
                                    </span>-->
                                </td>
							</tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    <input type="submit"  name="submit"  />
                                       
                                </td>
                            </tr>
                            <tr>
                                <!--<td align="center" class="subHeader" colspan="2">
                                    <a id="HyperLink1" href="#">Forgot Password</a>
                                </td>-->
                                <span style="color: red;">{{session('logout')}}</span>
                            </tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                        </table></form>
                    </td>
                    <td style="width: 30%">
                    </td>
                </tr>
            </table>
        </p>
        <div class="clear">
        </div>

        <x-footer/>
@endsection
