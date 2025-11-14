<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Enter Komputer</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root{
      --brand:#0d6efd;
      --muted:#6c757d;
    }
    body {
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background:#f6f7fb;
    }
    .page-header {
      background: linear-gradient(90deg, rgba(13,110,253,0.10), rgba(13,110,253,0.03));
      border-bottom: 1px solid rgba(13,110,253,0.06);
      padding: 18px 0;
      margin-bottom: 30px;
    }
    .brand {
      font-weight: 700;
      letter-spacing: 0.2px;
      color: #0f1724;
    }
    .card-plain {
      border: none;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(15,23,36,0.06);
      background: linear-gradient(180deg, #ffffff, #fbfcff);
    }
    footer.footer {
      margin-top:60px;
      padding:30px 0;
      color:var(--muted);
      font-size:.9rem;
    }
  </style>
</head>

<body>
  <header class="page-header">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        
        <!-- Logo EK -->
        <div style="
          width:44px;height:44px;
          border-radius:8px;
          background:linear-gradient(135deg,var(--brand),#6610f2);
          display:flex;align-items:center;justify-content:center;
          color:white;font-weight:700;font-size:18px;">
          EK
        </div>

        <div>
          <div class="brand">Enter Komputer</div>
          <small style="color:var(--muted)">E-Katalog Resmi Enter Komputer</small>
        </div>
      </div>

      <div>
        <a href="{{ route('barang.create') }}" class="btn btn-primary btn-icon">
          <i class="fa-solid fa-plus"></i> Tambah Barang
        </a>
      </div>
    </div>
  </header>

  <main class="container">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    @endif

    @yield('content')
  </main>

  <footer class="footer">
    <div class="container text-center">
      <span>&copy; {{ date('Y') }} Enter Komputer - Terpercaya & Terdepan</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
