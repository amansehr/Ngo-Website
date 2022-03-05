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
            <form method="post" action="loginform">
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
                                    Login Details
                                    
                                </td>
                                <span style="color: red;">{{session('error')}}</span> 
                            </tr>
                            <tr style="width: 100%;">
                                <td class="subHeader">
                                    User Name
                                </td>
                                <td class="subHeader">
                                    <input name="Username" type="text" id="Username" style="width:150px;" />
                                    <br>
                                    <span class="field_error"> 
                                        @error('Username')
                                             {{$message}}
                                        @enderror
                                    </span>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td class="subHeader" valign="top">
                                    Password
                                </td>
                                <td class="subHeader">

                                   <input name="password" type="password" id="password" style="width:150px;"  />
                                        <br>
                                    <span class="field_error"> 
                                        @error('password')
                                             {{$message}}
                                        @enderror
                                    </span>
                                </td>
                            </tr>
                            <tr></tr><tr></tr>
                            <tr>
                                <td align="center" class="subHeader" colspan="2">
                                    <input type="image"  name="submit" src="images/container/loginnic.jpg" onclick="submit" />
                                       
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
