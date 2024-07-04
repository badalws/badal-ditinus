<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hierarchical Data</title>
    <!-- for bullets and allignment-->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        ul ul {
            list-style-type: disc;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Hierarchical List</h1>
    {!! app('App\Http\Controllers\HierarchyController')->renderHierarchy($hierarchies) !!}
</body>
</html>
