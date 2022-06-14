<div class="sidebar-wrapper sidebar-theme">
   <nav id="sidebar">
      <ul class="navbar-nav theme-brand flex-row  text-center">
         <li class="nav-item theme-logo"> <a href="<?=base_url('juggler/dashboard')?>"> <img src="<?=base_url('assets/juggler/assets/img/admin_icon.png')?>" class="navbar-logo" alt="logo"> </a> </li>
         <li class="nav-item theme-text"> <a href="<?=base_url('juggler/dashboard')?>" class="nav-link"> Admin </a> </li>
         <li class="nav-item toggle-sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse">
               <line x1="19" y1="12" x2="5" y2="12"></line>
               <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
         </li>
      </ul>
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">
         <li class="menu">
            <a href="<?=base_url('juggler/dashboard')?>" aria-expanded="true" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                     <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                     <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Dashboard</span> 
               </div>
               <div> </div>
            </a>
         </li>
         <li class="menu">
            <a href="#setting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                     <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                     <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                  </svg>
                  <span>Setting</span> 
               </div>
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                     <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
               </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="setting" data-parent="#accordionExample">
               <li> <a href="<?=base_url('juggler/change-password')?>"> Change Password </a> </li>
               <li> <a href="<?=base_url('juggler/social-media')?>"> Social Media</a> </li>
               <li> <a href="<?=base_url('juggler/information')?>"> Information </a> </li>
            </ul>
         </li>
         <li class="menu">
            <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                     <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                     <polyline points="13 2 13 9 20 9"></polyline>
                  </svg>
                  <span>Pages</span> 
               </div>
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                     <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
               </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
               <li> <a href="<?=base_url('juggler/pages')?>"> Pages </a> </li>
               <li> <a href="<?=base_url('juggler/pages/add')?>"> Add Page </a> </li>
               <li> <a href="<?=base_url('juggler/profile_page')?>"> Profile </a> </li>
            </ul>
         </li>
         <?php /*<li class="menu">
            <a href="#post" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                     <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                     <polygon points="12 15 17 21 7 21 12 15"></polygon>
                  </svg>
                  <span>Post</span> 
               </div>
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                     <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
               </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="post" data-parent="#accordionExample">
               <li> <a href="<?=base_url('juggler/post')?>"> Post </a> </li>
               <li> <a href="<?=base_url('juggler/post/add')?>"> Add Post </a> </li>
               <li> <a href="<?=base_url('juggler/post/category')?>"> Category </a> </li>
               <li> <a href="<?=base_url('juggler/post/add_category')?>"> Add Category </a> </li>
            </ul>
         </li>
         <li class="menu">
            <a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                     <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                     <polygon points="12 15 17 21 7 21 12 15"></polygon>
                  </svg>
                  <span>Events</span> 
               </div>
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                     <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
               </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="events" data-parent="#accordionExample">
               <li> <a href="<?=base_url('juggler/events')?>"> Events </a> </li>
               <li> <a href="<?=base_url('juggler/events/add')?>"> Add Event </a> </li>
            </ul>
         </li> 
         
            <li class="menu"> <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            
              <div class="">
            
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
            
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
            
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
            
                </svg>
            
                <span>Services</span> </div>
            
              <div>
            
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
            
                  <polyline points="9 18 15 12 9 6"></polyline>
            
                </svg>
            
              </div>
            
              </a>
            
              <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
            
                <li> <a href="<?=base_url('juggler/services')?>"> Services </a> </li>
         <li> <a href="<?=base_url('juggler/services/add')?>"> Add Services </a> </li>
      </ul>
      </li>
      
      <li class="menu">
         <a href="#lms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
               </svg>
               <span>LMS</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="lms" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/quizzes')?>"> Quizzes </a> </li>
            <li> <a href="<?=base_url('juggler/quizzes/add')?>"> Add Quizzes </a> </li>
         </ul>
      </li>*/?>
      <li class="menu">
         <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
               </svg>
               <span>Courses</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="courses" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/category')?>"> Category </a> </li>
            <li> <a href="<?=base_url('juggler/category/add')?>"> Add Category </a> </li>
            <li> <a href="<?=base_url('juggler/courses')?>"> Courses </a> </li>
            <li> <a href="<?=base_url('juggler/courses/add')?>"> Add Courses </a> </li>
            <li> <a href="<?=base_url('juggler/lession')?>"> Lession </a> </li>
            <li> <a href="<?=base_url('juggler/lession/add')?>"> Add Lession </a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#std_zone" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
               </svg>
               <span>Student Zone</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="std_zone" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/student_zone/classes')?>"> Manage Class </a> </li>
            <li> <a href="<?=base_url('juggler/student_zone/add_class')?>">Add Class </a> </li>
            <li> <a href="<?=base_url('juggler/student_zone/subject')?>"> Manage Subject </a></li>
            <li> <a href="<?=base_url('juggler/student_zone/add_subject')?>"> Add Subject </a></li>
            <li> <a href="<?=base_url('juggler/student_zone')?>"> Manage Student </a></li>
            <li> <a href="<?=base_url('juggler/student_zone/add')?>">Add Student </a></li>
            <li> <a href="<?=base_url('juggler/student_zone/enroll_list')?>">Enrollment List</a></li>
            <li> <a href="<?=base_url('juggler/student_zone/admit_card_list')?>">Admit Card List</a></li>
            <li> <a href="<?=base_url('juggler/student_zone/upload_results')?>">Upload Result File</a></li>
            <li> <a href="<?=base_url('juggler/student_zone/result')?>">Result List</a></li>
         </ul>
      </li>
	  <?php /*
      <li class="menu">
         <a href="#faq" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
               </svg>
               <span>Faq</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="faq" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/faq')?>"> Faq </a> </li>
            <li> <a href="<?=base_url('juggler/faq/add')?>"> Add Faq </a> </li>
         </ul>
      </li>
	  <li class="menu">
         <a href="#team" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
               </svg>
               <span>Our Team</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="team" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/our_team')?>"> Our Team </a> </li>
            <li> <a href="<?=base_url('juggler/our_team/add')?>"> Add Our Team </a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#apply" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
               </svg>
               <span>How to Apply</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="apply" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/apply')?>"> How to Apply </a> </li>
            <li> <a href="<?=base_url('juggler/apply/add')?>"> Add Apply </a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#book" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
               </svg>
               <span>Book Online</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="book" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/book_online')?>"> Book Published </a> </li>
            <li> <a href="<?=base_url('juggler/book_online/add')?>"> Add Book Published </a> </li>
         </ul>
      </li>
	  */?>
      <li class="menu">
         <a href="#location" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
               </svg>
               <span>Location</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="location" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/state')?>"> State </a> </li>
            <li> <a href="<?=base_url('juggler/state/add')?>"> Add State </a> </li>
            <li> <a href="<?=base_url('juggler/city')?>"> City </a> </li>
            <li> <a href="<?=base_url('juggler/city/add')?>"> Add City </a> </li>
         </ul>
      </li>

      <li class="menu"> <a href="#fra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
          </svg>
          <span>Franchise</span> </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="fra" data-parent="#accordionExample">
          <li><a href="<?=base_url('juggler/franchises')?>"> Manage Franchise </a></li>
          <li><a href="<?=base_url('juggler/franchises/add')?>">Add Franchise </a></li>
        </ul>
      </li>
      
<!--       <li class="menu">
         <a href="#franchise" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
               </svg>
               <span>Franchise</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="franchise" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/franchise')?>"> Franchise </a> </li>
            <li> <a href="<?=base_url('juggler/franchise/add')?>"> Add Franchise </a> </li>
         </ul>
      </li> -->
<?php  /*
      <li class="menu">
         <a href="#portfolio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                  <circle cx="8.5" cy="8.5" r="1.5"></circle>
                  <polyline points="21 15 16 10 5 21"></polyline>
               </svg>
               <span>Gallery</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="portfolio" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/portfolio')?>"> Gallery </a> </li>
            <li> <a href="<?=base_url('juggler/portfolio/add')?>"> Add Gallery</a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#slider" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
               </svg>
               <span>Slider</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="slider" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/slider')?>"> Slider </a> </li>
            <li> <a href="<?=base_url('juggler/slider/add')?>"> Add Slider</a> </li>
            <li> <a href="<?=base_url('juggler/slider/slider-bottom')?>"> Slider Bottom </a> </li>
            <li> <a href="<?=base_url('juggler/slider/slider-bottom/add')?>"> Add Slider Bottom</a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#clients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
               </svg>
               <span>Clients</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="clients" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/clients')?>"> Clients </a> </li>
            <li> <a href="<?=base_url('juggler/clients/add')?>"> Add Client</a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#testimonials" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
               </svg>
               <span>Testimonials</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="testimonials" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/testimonials')?>"> Testimonials </a> </li>
            <li> <a href="<?=base_url('juggler/testimonials/add')?>"> Add Testimonials </a> </li>
            <li> <a href="<?=base_url('juggler/video')?>"> Video </a> </li>
            <li> <a href="<?=base_url('juggler/video/add')?>"> Add Video </a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#choose" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
               </svg>
               <span>Why Choose</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="choose" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/why_choose')?>"> Why Choose </a> </li>
            <li> <a href="<?=base_url('juggler/why_choose/add')?>"> Add Choose</a> </li>
         </ul>
      </li>*/?>
      <li class="menu">
         <a href="<?=base_url('juggler/enquiry')?>" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
               </svg>
               <span>Enquiry</span> 
            </div>
         </a>
      </li>
      
      <li class="menu">
         <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
               </svg>
               <span>Users</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/users')?>"> Users </a> </li>
            <li> <a href="<?=base_url('juggler/users/add')?>"> Add Users </a> </li>
         </ul>
      </li>
      <li class="menu">
         <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
               </svg>
               <span>Request</span> 
            </div>
            <div>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                  <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
            </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
            <li> <a href="<?=base_url('juggler/request')?>"> Consultation Request </a> </li>
            <li> <a href="<?=base_url('juggler/request/callRequest')?>"> Call Request </a> </li>
         </ul>
      </li>
      </ul>
   </nav>
</div>