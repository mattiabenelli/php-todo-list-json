<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container my-4">
            <div class="row">
                <div class="col">
                    <h1>TO DO LIST</h1>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-4">
                    <ul class="list-group">
                        <li class="list-group-item" v-for="(object,index) in todoList">
                            <span>
                                {{object.task}}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-4">
                    <input type="text" class="form-control" id="todolist" placeholder="add task" v-model="newTask">
                    <button class="btn btn-primary my-3" type="submit" @click="addTask()">submit</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>