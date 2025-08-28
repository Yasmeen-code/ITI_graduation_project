<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #4cc9f0;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            min-height: 100vh;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            color: var(--dark);
            padding: 20px;
        }
        
        .header h1 {
            font-weight: 800;
            letter-spacing: -0.5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 10px;
        }
        
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .book-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .book-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
        }
        
        .book-cover {
            height: 180px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }
        
        .book-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .book-title {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 8px;
            font-size: 1.1rem;
            line-height: 1.4;
        }
        
        .book-author {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 12px;
            font-size: 0.9rem;
        }
        
        .book-description {
            color: #666;
            line-height: 1.6;
            font-size: 0.85rem;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        
        .btn-view {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border: none;
            border-radius: 12px;
            padding: 8px 16px;
            color: white;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            width: 100%;
        }
        
        .btn-view:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        
        .btn-view:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><i class="fas fa-book-open me-2"></i>Library Collection</h1>
        <p class="lead">Discover our curated selection of books</p>
    </div>
    
    <div class="book-grid">
        @foreach($books as $book)
        <div class="book-card">
            <div class="book-cover">
                <i class="fas fa-book"></i>
            </div>
            <div class="book-content">
                <h5 class="book-title">{{ $book->title }}</h5>
                <p class="book-author"><i class="fas fa-user me-1"></i> {{ $book->author }}</p>
                <p class="book-description">{{ Str::limit($book->description, 90) }}</p>
                <button class="btn-view">
                    <i class="fas fa-search me-1"></i> View Details
                </button>
            </div>
        </div>
       
        @endforeach
     
    </div>
       <center>
      <button class="btn btn-primary mt-4" onclick="window.location='{{ url("dashboard") }}'">Back to Dashboard</button>
        </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
