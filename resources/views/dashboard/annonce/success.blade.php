@extends('dashboard.layout.app')

@section('main')

<div class="nk-wrap ">
    <!-- main header @s -->
    <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">

        </div><!-- .container-fliud -->
    </div>
    <!-- main header @e -->
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-md m-auto">

                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <h4 class="title text-soft mb-4 overline-title">VTP GROUP</h4>
                                    <table class="email-wraper">
                                        <tbody><tr>
                                            <td class="py-5">
                                                <table class="email-header">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center pb-4">
                                                                <a href="#"><img class="email-logo" src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="logo" style="height: 120px;"></a>
                                                                <p class="email-title">Votre souscription a  été effectuée avec  succès</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="email-body">
                                                    <tbody>
                                                        <tr>
                                                            <td class="p-3 p-sm-5">
                                                                <p><strong>Chers {{Auth::user()->name}}</strong>,</p>
                                                                <p>vous pouvez poster vos annonces dés à present !   </p>
                                                                <p>N’hésitez pas à communiquer avec nous pour toute autre question ou si vous avez besoin d’aide en vue de vous apporter une assitance personnelle.

                                                                    Merci,</p>

                                                                <p class="mt-4">---- <br> Cordialement <br>VTP GROUP</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table class="email-footer">

                                                </table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </div>

                        </div><!-- .nk-block -->









                    </div><!-- .content-page -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s -->


    <!-- footer @e -->
</div>
@endsection
