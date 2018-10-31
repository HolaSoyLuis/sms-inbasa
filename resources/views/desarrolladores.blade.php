@extends('principal')

@section('title', 'Desarrolladores')

@section('content')
    @section('txtPrincipal', 'UMG')
    @section('txtSecundario', 'Décimo Ciclo de Ingeniería en Sistemas, San Pedro Sacatepéquez, San Marcos.')
    <style type="text/css">
      
    .img-social{
      min-width: 5px;
      width: 50px;
      max-width: 80px;
    }
      
    </style>
    <div class="about-team team-1">
        <div class="row">
    		<div class="col-md-8 col-md-offset-2 text-center">
    			<h2 class="title">Quiénes Somos?</h2>
                <h5 class="description" style="text-align: start;">Grupo de estudiantes del Décimo Ciclo de Ingeniería en Sistemas de Información, 
                    sede en San Pedro Sacatepéquez, San Marcos.</br>
                    Apasionados por la informática, el desarrollo de software y el diseño de sistemas informáticos.
                </h5>
    		</div>
        </div>
        
        <div class="row">
            <!-- Perfil Willy -->
            <div class="col-md-4">
      		    <div class="card card-profile card-plain">
      			    <div class="card-avatar">
      				    <a href="#">
      					    <img class="img" src="{{asset('img/faces/willy.jpg')}}" />
      				    </a>
      			    </div>
       					<div class="card-content">
      						<h4 class="card-title">Willy de León</h4>
      						<h6 class="category text-muted">WEB DEVELOPER Y DESIGNER</h6>
       						<p class="card-description">
      							Desarrollador Web de sistemas, seguridad informática y web design.
      						</p>
      						<div class="footer">
                    <div class="d-flex justify-content-center">
                      <div class="img-social">
                        <a href="https://twitter.com/wulmdeleon" class="btn btn-just-icon btn-simple btn-twitter" target="_blank"><img src="{{ asset('img/social/twitter.svg')}}" alt="tw" ></a>    
                      </div>
                      <div class="img-social">
                        <a href="https://www.facebook.com/wiudleonm" class="btn btn-just-icon btn-simple btn-facebook" target="_blank"><img src="{{ asset('img/social/facebook.svg')}}" alt="fb"></a>
                      </div>
                      <div class="img-social">
                        <a href="https://www.linkedin.com/in/wiudleonm/" class="btn btn-just-icon btn-simple btn-linkedin" target="_blank"><img src="{{ asset('img/social/linkedin.svg')}}" alt="ln" ></a>
                      </div>
                    </div>
       						</div>
       					</div>
     				 </div>
          </div>
               
          <!-- Perfil Gerber -->
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#">
                  <img class="img" src="{{asset('img/faces/gerber.jpg')}}" />
                </a>
              </div>
              <div class="card-content">
                <h4 class="card-title">Gerber Maldonado</h4>
                <h6 class="category text-muted">WEB DEVELOPER</h6>
                <p class="card-description">
                Desarrollador Web.
                </p>
                <div class="footer">
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-twitter" target="_blank"><img src="{{ asset('img/social/twitter.svg')}}" alt="tw" class="img-social" ></a>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-facebook" target="_blank"><img src="{{ asset('img/social/facebook.svg')}}" alt="fb" class="img-social" ></a>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-linkedin" target="_blank"><img src="{{ asset('img/social/linkedin.svg')}}" alt="ln" class="img-social" ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
               
          <!-- Perfil Werner -->
          <div class="col-md-4">
            <div class="card card-profile card-plain">
              <div class="card-avatar">
                <a href="#">
                  <img class="img" src="{{asset('img/faces/werner.jpg')}}" />
                </a>
              </div>
              <div class="card-content">
                <h4 class="card-title">Werner González</h4>
                <h6 class="category text-muted">WEB DEVELOPER</h6>
                <p class="card-description">
                  Desarrollador Web.
                </p>
                <div class="footer">
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-twitter" target="_blank"><img src="{{ asset('img/social/twitter.svg')}}" alt="tw" class="img-social" ></a>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-facebook" target="_blank"><img src="{{ asset('img/social/facebook.svg')}}" alt="fb" class="img-social" ></a>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <div class="img-social">
                      <a href="#" class="btn btn-just-icon btn-simple btn-linkedin" target="_blank"><img src="{{ asset('img/social/linkedin.svg')}}" alt="ln" class="img-social" ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		</div>

		<div class="row">
			<!-- Perfil Luis -->
      <div class="col-md-4">
        <div class="card card-profile card-plain">
          <div class="card-avatar">
            <a href="#">
              <img class="img" src="{{asset('img/faces/luis.jpg')}}" />
            </a>
          </div>
          <div class="card-content">
            <h4 class="card-title">Luis Velásquez</h4>
            <h6 class="category text-muted">WEB DEVELOPER</h6>
            <p class="card-description">
              Desarrollador Web.
            </p>
            <div class="footer">
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-twitter" target="_blank"><img src="{{ asset('img/social/twitter.svg')}}" alt="tw" class="img-social" ></a>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-facebook" target="_blank"><img src="{{ asset('img/social/facebook.svg')}}" alt="fb" class="img-social" ></a>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-linkedin" target="_blank"><img src="{{ asset('img/social/linkedin.svg')}}" alt="ln" class="img-social" ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            
      <!-- Perfil Elías -->
      <div class="col-md-4">
        <div class="card card-profile card-plain">
          <div class="card-avatar">
            <a href="#">
              <img class="img" src="{{asset('img/faces/elias.jpg')}}" />
            </a>
          </div>
          <div class="card-content">
            <h4 class="card-title">Elías Mérida</h4>
            <h6 class="category text-muted">ADMINISTRADOR</h6>
            <p class="card-description">
              Administrador del proyecto.
            </p>
            <div class="footer">
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-twitter" target="_blank"><img src="{{ asset('img/social/twitter.svg')}}" alt="tw" class="img-social" ></a>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-facebook" target="_blank"><img src="{{ asset('img/social/facebook.svg')}}" alt="fb" class="img-social" ></a>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="img-social">
                  <a href="#" class="btn btn-just-icon btn-simple btn-linkedin" target="_blank"><img src="{{ asset('img/social/linkedin.svg')}}" alt="ln" class="img-social" ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
  </div>

@endsection