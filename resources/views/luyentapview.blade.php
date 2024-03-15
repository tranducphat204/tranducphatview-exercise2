<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<link rel=" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="d-flex justify-content-center">
    <div class="col-6 mt-2">
        <div class="col-10 bg-secondary-subtle d-flex justify-content-between border border-black m-2 rounded">
            <div class="ms-3 mt-2">
                <p>Task list</p>
            </div>
            <div class="border border-black rounded bg-white me-4 mt-2 mb-2 pb-2 ps-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-list me-3 mt-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </div>
        </div>
        <div class="col-10 border m-2">
            <div class="col bg-secondary-subtle border border-black m-2 rounded">
                <p class="ms-2 mt-2">New task</p>
            </div>
            <div class="m-2">
                <div class="col-10">
                    <p><b>Task</b></p>
                </div>
                <div class="col-10">
                    <input class="rounded" type="text">
                </div>
                <div>
                    <button type="button" class="btn btn-secondary mt-2 mb-3">+ Add task</button>
                </div>
            </div>
            <div class="col bg-secondary-subtle border border-black m-2 rounded">
                <p class="ms-2 mt-2">Current task</p>
            </div>
            <div class="m-2">
                <div class="col-10">
                    <p><b>Task</b></p>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="row ps-2 pe-3">
                    <p class="col-6 pt-3">First Task</p>
                    <button type="button" class="col-2 btn btn-danger mt-2 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-2 mb-1" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                        </svg>Delete</button>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="row ps-2 pe-3 pb-4">
                    <p class="col-6 pt-3">Second Task</p>
                    <button type="button" class="col-2 btn btn-danger mt-2 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash me-2 mb-1" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                        </svg>Delete</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>