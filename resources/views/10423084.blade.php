<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header {
        display: flex;
        align-items: center;
        flex-direction: column;

    }
    p {
        width: 30%;
    }
    form {
        display:flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
</style>
<body>
    <div class="header">
        <h1>Pallebord</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore adipisci non laborum porro expedita voluptatem, provident nostrum error libero qui. Laboriosam voluptate molestias quasi ut. Eaque corrupti officia, dolore fuga hic non? Perferendis, fugit sunt quia vel voluptatibus corrupti inventore.</p>
        <img src="https://i0.wp.com/cdn.homedit.com/wp-content/uploads/2012/05/pallet-furniture-project.jpg?resize=600%2C400" alt="">
    </div>
    
    <form action="/buy" method="GET">
        <label for="">Name</label>
        <input type="text">
        <button>Køb</button>
    </form>
</body>
</html>