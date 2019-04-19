@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                    {{ Auth::user()->email }} 
                    <div class="row">
                        <form action="https://test.placetopay.com/redirection/api/session" method ="POST" class = "col m12">
                            <input type="hidden" name="login" value = "6dd490faf9cb87a9862245da41170ff2">
                            <input type="hidden" name="seed" value = "{{date('c') }}">
                        
                            <input type="hidden" name="nonce" value = "{{$nonceBase64}}">
                            <input type="hidden" name="tranKey" value = "{{base64_encode(sha1($nonceBase64 . date('c') . '024h1IlD', true))}}">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="reference" name ="reference" readonly="readonly" id="reference" type="text" class="validate" value="5976030f5575d">
                                    
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder = "description" readonly="readonly" name = "description" id="description" type="text" class="validate" value = "Pago básico de prueba">
                            
                                </div>
                            </div>    
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Moneda" readonly="readonly" name ="currency" id="currency" type="text" class="validate" value="COP">
                                    
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder = "monto" readonly="readonly" name ="total" id="total" type="text" class="validate" value = "10000">
                            
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="expiration" readonly="readonly" name = "expiration" id="expiration" type="text" class="validate" value="{{date('c')}}">
                                    
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder = "session" readonly="readonly" name ="session" id="session" type="text" class="validate" value = "784">
                            
                                </div>
                            </div> 
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="First Name" id="first_name" type="text" name = "name" class="validate">
                                        
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Last Name"  id="last_name" name = "last_name" type="text" class="validate">
                                        
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Email" pattern="[A-Za-z0-9_-@]{100}" id="email" name ="email" type="email" class="validate">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Documento"   id="cc" type="text" name = "cc" class="validate">
                                    
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder = "Celular"  id="cel" type="text" name = "cel" class="validate">
                            
                                </div>
                            </div>    
                            <div class="row">
                            
                                <div class="col s3">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Continue
                                    </button>
                                </div>
                            </div>
                        
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
