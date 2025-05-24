<!doctype html>
<html lang="en">
  <!--begin::Head-->
 @include('Admin.partials.header')
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
     @include('Admin.partials.navbar')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('Admin.partials.sidebar')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
          @yield('content')
      </main>
    @include('Admin.partials.footer')