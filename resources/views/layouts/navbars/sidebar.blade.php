
<div class="sidebar" data-color="orange">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
      <div class="logo">
          <a href="/" class="simple-text logo-mini">
          {{ __('CT') }}
          </a>
          <a href="/" class="simple-text logo-normal">
          {{ __('Kokeru') }}
          </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
          <li class="@if ($activePage == 'home') active @endif">
              <a href="/managers/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>{{ __('Dashboard') }}</p>
              </a>
          </li>
          <li class="@if ($activePage == 'dataCS') active @endif">
              <a href="/managers/dataCS">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>{{ __('Data Cleaning Service') }}</p>
              </a>
          </li>
          <li class="@if ($activePage == 'profile') active @endif">
              <a href="/managers/profile">
              <i class="now-ui-icons users_single-02"></i>
              <p>{{ __('Profile') }}</p>
              </a>
          </li>
          
          </ul>
      </div>
  </div>