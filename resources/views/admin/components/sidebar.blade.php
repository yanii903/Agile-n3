 <!-- sidebar -->
 <div class="cr-sidebar-overlay"></div>
 <div class="cr-sidebar" data-mode="light">
     <div class="cr-sb-logo">
         <a href="index.html" class="sb-full"><img src="{{ asset('assets/admin/img/logo/full-logo.png') }}" alt="logo"></a>
         <a href="index.html" class="sb-collapse"><img src="{{ asset('assets/admin/img/logo/collapse-logo.png') }}"
                 alt="logo"></a>
     </div>
     <div class="cr-sb-wrapper">
         <div class="cr-sb-content">
             <ul class="cr-sb-list">
                 <li class="cr-sb-item sb-drop-item">
                     <a href="javascript:void(0)" class="cr-drop-toggle">
                         <i class="ri-dashboard-3-line"></i><span class="condense">Dashboard<i
                                 class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                     <ul class="cr-sb-drop condense">
                         <li><a href="index.html" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>ecommerce</a></li>
                         <li><a href="" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>Product list</a></li>
                         <li><a href="{{ route('admin.products.create') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>Add Product</a></li>
                         <li><a href="{{ route('admin.categories.create') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>Add Category</a></li>
                         <li><a href="add-sub-category.html" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>Add Sub Category</a></li>
                         <li><a href="order-list.html" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i>Order List</a></li>
                         <li class="cr-sb-item sb-subdrop-item">
                             <a href="javascript:void(0)" class="cr-sub-drop-toggle">
                                 <i class="ri-shield-user-line"></i><span class="condense">Vendor<i
                                         class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                             <ul class="cr-sb-subdrop condense">
                                 <li><a href="vendor-profile.html" class="cr-page-link subdrop"><i
                                             class="ri-checkbox-blank-circle-line"></i>Profile</a></li>
                                 <li><a href="vendor-update.html" class="cr-page-link subdrop"><i
                                             class="ri-checkbox-blank-circle-line"></i>Vendor Update</a></li>
                                 <li><a href="vendor-list.html" class="cr-page-link subdrop"><i
                                             class="ri-checkbox-blank-circle-line"></i>Vendor List</a></li>
                                 <li><a href="invoice.html" class="cr-page-link subdrop"><i
                                             class="ri-checkbox-blank-circle-line"></i>Invoice</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="cr-sb-item-separator"></li>
                 <li class="cr-sb-title condense">Quản lí</li>
                 <li class="cr-sb-item sb-drop-item">
                     <a href="javascript:void(0)" class="cr-drop-toggle">
                         <i class="ri-pages-line"></i><span class="condense">Account<i
                                 class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                     <ul class="cr-sb-drop condense">
                         <li><a href="{{ route('admin.users.index') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>List</a></li>
                         <li><a href="{{ route('admin.users.create') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>Create</a></li>

                     </ul>
                 </li>
                 <li class="cr-sb-item sb-drop-item">
                     <a href="javascript:void(0)" class="cr-drop-toggle">
                         <i class="ri-pages-line"></i><span class="condense">Product<i
                                 class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                     <ul class="cr-sb-drop condense">
                         <li><a href="{{ route('admin.products.index') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>List</a></li>
                         <li><a href="{{ route('admin.products.create') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>Create</a></li>

                     </ul>
                 </li>
                 <li class="cr-sb-item sb-drop-item">
                     <a href="javascript:void(0)" class="cr-drop-toggle">
                         <i class="ri-pages-line"></i><span class="condense">Category<i
                                 class="drop-arrow ri-arrow-down-s-line"></i></span></a>
                     <ul class="cr-sb-drop condense">
                         <li><a href="{{ route('admin.categories.index') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>List</a></li>
                         <li><a href="{{ route('admin.categories.create') }}" class="cr-page-link drop"><i
                                     class="ri-checkbox-blank-circle-line"></i></i>Create</a></li>

                     </ul>
                 </li>
                 <li class="cr-sb-item-separator"></li>
                 <li class="cr-sb-title condense">Elements</li>
                 <li class="cr-sb-item">
                     <a href="remix-icons.html" class="cr-page-link">
                         <i class="ri-remixicon-line"></i><span class="condense"><span
                                 class="hover-title">remix
                                 icons</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="material-icons.html" class="cr-page-link">
                         <i class="mdi mdi-material-ui"></i><span class="condense"><span
                                 class="hover-title">Material icons</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="apexchart.html" class="cr-page-link">
                         <i class="ri-bar-chart-grouped-line"></i><span class="condense"><span
                                 class="hover-title">Apexcharts</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="buttons.html" class="cr-page-link">
                         <i class="ri-radio-button-line"></i><span class="condense"><span
                                 class="hover-title">Buttons</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="accordions.html" class="cr-page-link">
                         <i class="ri-play-list-add-line"></i><span class="condense"><span
                                 class="hover-title">Accordions</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="typography.html" class="cr-page-link">
                         <i class="ri-file-text-line"></i><span class="condense"><span
                                 class="hover-title">Typography</span></span></a>
                 </li>
                 <li class="cr-sb-item">
                     <a href="alert-popup.html" class="cr-page-link">
                         <i class="ri-file-warning-line"></i><span class="condense"><span
                                 class="hover-title">Alert Popup</span></span></a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
