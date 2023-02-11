      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav mt-5 pt-5">
              <li class="nav-item nav-profile">
                  <div class="nav-link">
                      <div class="profile-image">
                          <img src="{{ asset('melody/images/faces/face5.jpg') }}" alt="image" />
                      </div>
                      <div class="profile-name">
                          <p class="name">
                              Welcome Jane
                          </p>
                          <p class="designation">
                              Super Admin
                          </p>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('categories.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-bookmark-check-fill mr-4" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                              d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                      </svg>
                      <span class="menu-title fs-5 fw-bold">Categorias</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('providers.index') }}">
                    
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-person-fill-check mr-4" viewBox="0 0 16 16">
                          <path
                              d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          <path
                              d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
                      </svg>
                      <span class="menu-title fs-5 fw-bold">Proveedores</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('products.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-box2-fill mr-4" viewBox="0 0 16 16">
                          <path
                              d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
                      </svg>
                      <span class="menu-title fs-5 fw-bold">Productos</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('clients.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill mr-4" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                      </svg>
                      
                      <span class="menu-title fs-5 fw-bold">Clientes</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('purchases.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-bag-fill mr-4" viewBox="0 0 16 16">
                          <path
                              d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                      </svg>
                      <span class="menu-title fs-5 fw-bold">Compras</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('sales.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-right mr-4" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
                      </svg>
                      <span class="menu-title fs-5 fw-bold">Ventas</span>
                  </a>
              </li>
          </ul>
      </nav>
