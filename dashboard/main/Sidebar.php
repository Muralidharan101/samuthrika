<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo">
                        <img src="../assets/images/samlogo.jpg" alt="logo" class="w-75 h-50" >
                    </span>
                    
                </a>

                
                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="../assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">Samuthrika</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                
                                <span> Dashboards </span>
                            </a>
                            
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#product" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Product </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="product">
                            <ul class="side-nav">
                             
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCloth" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                            <i class="fa-solid fa-shirt"></i>
                                <span> Clothing </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCloth">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="clothes_creation.php">Clothes Creation</a>
                                    </li>
                                    <li>
                                        <a href="clothes_list.php">Clothes List</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLead1" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                            <i class="fa-solid fa-gem"></i>
                                <span> Jewellery </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLead1">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="jewels_creation.php">Jewel Creation</a>
                                    </li>
                                    <li>
                                        <a href="jewels_list.php">Jewel List</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLead2" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                            <i class="fa-solid fa-scissors"></i>
                                <span> Tailoring </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLead2">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="tailor_creation.php">Tailoring Creation</a>
                                    </li>
                                    <li>
                                        <a href="tailor_list.php">Tailoring List</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>



                                </ul>
                            </div>
                        </li>

<!-- 
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCloth" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Clothing </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCloth">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="clothes_creation.php">Clothes Creation</a>
                                    </li>
                                    <li>
                                        <a href="clothes_list.php">Clothes List</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li> -->

                        

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmployee" aria-expanded="false" aria-controls="sidebarEmployee" class="side-nav-link">
                                <i class="mdi mdi-account-tie"></i>
                                <span> Employee </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmployee">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="Employee_registration.php">Employee Registration</a>
                                    </li>
                                    <li>
                                        <a href="Employee_table.php">Employee View</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLead" aria-expanded="false" aria-controls="sidebarLead" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Lead </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLead">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="Lead_Form.php">Lead Registration</a>
                                    </li>
                                    <li>
                                        <a href="Lead_table.php">Lead View</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Visitor" aria-expanded="false" aria-controls="Visitor" class="side-nav-link">
                                <i class="mdi mdi-eye"></i>
                                <span> Visitor </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Visitor">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="Visitors_form_mobile.php">Visitor Registration</a>
                                    </li>
                                    <li>
                                        <a href="Visitors_table.php">Visitor View</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#branch" aria-expanded="false" aria-controls="Visitor" class="side-nav-link">
                                <i class="ri ri-stack-fill"></i>
                                <span> Master Data </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="branch">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="branch.php">Branch Creation</a>
                                    </li>
                                    <li>
                                        <a href="category.php">Category Creation</a>
                                    </li>
                                    <li>
                                        <a href="categorysub.php">Sub Category Creation</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        

                
                       
                        <!-- end Side Bar -->


                    </ul>
                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
                </div>
            </div>