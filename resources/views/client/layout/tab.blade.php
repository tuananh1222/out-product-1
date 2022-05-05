<div class="breadcrumb-section breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <div class="breadcrumb-text">
          {{-- <p>Mua sắm tại nhà. Tránh xa Covid</p> --}}
          <h1>
            @php
                if ($pageName == "") {
                  echo "Trang chủ";
                } else {
                  echo $pageName;
                }
            @endphp
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>