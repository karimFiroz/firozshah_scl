@extends('layouts.master')
@section('title','e_shop home')
@section('content')

<h1 align="center">Dashboard

<div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Task</h4>
                                    </div>
                                    <div class="todo-list">
                                        <div class="tdl-holder">
                                            <div class="tdl-content">
                                                <ul>
                                                    <li>
                                                    <a href='https://facebook.com'target='_blank'>Facebook</a></li>
                                                   <li> <a href='https://twitter.com'target='_blank' >Twitter</a></li>
                                                   <li> <a href='https://youtube.com'target='_blank' >Youtube</a></li>   
                                                    
                                                
                                                </ul>
                                            </div>
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card alert">
                                    <div class="card-title">
                                        <h4>Web Server</h4>
                                    </div>
                                    
                                    <div align="right">
<h1 align="center">
<div class="container">
<ull>
    <li class="breadcrumb-item"><a href="{{route('xyz')}}"><span><h3>Login</h3></span></a></li><br />
    <li class="breadcrumb-item"><a href="{{route('register')}}"><span><h3>Register</h3></a></li><br />
    <li class="breadcrumb-item"><a href="{{route('about')}}"><span><h3>About Us</h3></a></li><br />
    <li class="breadcrumb-item"><a href="{{route('contact')}}"><span><h3>Contact Us</h3></a></li><br />
</ull>
</div>
</h1>
</div>
                                        
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-title">
                                        <h4>Ticket </h4>

                                    </div>
                                    <div class="recent-comment">
                                        <div class="media">
                                            
                                            <div class="media-body">
                                                
                                                
                                                
                                                    
                                                    <span class="m-l-10">
                                                    <ul>
                                                    <li>
                                                    <a href='https://facebook.com'target='_blank'><span><h3>Facebook</h3></span></a></li>
                                                   <li> <a href='https://twitter.com'target='_blank' ><span><h3>Twitter</h3></span></a></li>
                                                   <li> <a href='https://youtube.com'target='_blank' ><span><h3>Youtube</h3></span></a></li>   
                                                    
                                                
                                                </ul>
												</span>
                                                
                                                
                                            </div>
                                        </div>

                                      
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer">
                                <div align="center">
                                  <p>2020 © Admin Board. - <a href="https://firozlearninghome.blogspot.com"target="_blank"><strong>My Blog</strong></a></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="type keyword(s) here" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
@endsection