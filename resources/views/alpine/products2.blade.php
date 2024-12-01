<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produts</title>
</head>
<body>
    <h1>Products</h1>
    <div x-data="data">
        <ul>
            <template x-for="product,index in products" :key="index">
                <li x-text="`${index+1} - ${product.name}`"></li>
            </template>
        </ul>
    </div>
    <script>
        const data = {
            products: @json($products)
        }
    </script>
    
</body>
</html>