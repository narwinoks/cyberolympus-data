		<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Gent<span>X</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Product</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('invoice.index') }}" class="nav-link">
              <i class="link-icon" data-feather="credit-card"></i>
              <span class="link-title">Invoice</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('customer.index') }}" class="nav-link">
              <i class="link-icon" data-feather="external-link"></i>
              <span class="link-title">Customers</span>
            </a>
          <li class="nav-item">
            <a href="{{ route('agent.index') }}" class="nav-link">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Agent</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
		<!-- partial -->