# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## api/pessoas




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pessoas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Name 1",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 2,
        "name": "Name 2",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 3,
        "name": "Name 3",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    }
]
```
<div id="execution-results-GETapi-pessoas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pessoas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pessoas"></code></pre>
</div>
<div id="execution-error-GETapi-pessoas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pessoas"></code></pre>
</div>
<form id="form-GETapi-pessoas" data-method="GET" data-path="api/pessoas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pessoas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pessoas" onclick="tryItOut('GETapi-pessoas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pessoas" onclick="cancelTryOut('GETapi-pessoas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pessoas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pessoas</code></b>
</p>
</form>


## api/shiporders




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/shiporders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shiporders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "pessoa": 1,
        "shipto_id": 1,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 2,
        "pessoa": 2,
        "shipto_id": 2,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 3,
        "pessoa": 3,
        "shipto_id": 3,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    }
]
```
<div id="execution-results-GETapi-shiporders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-shiporders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shiporders"></code></pre>
</div>
<div id="execution-error-GETapi-shiporders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shiporders"></code></pre>
</div>
<form id="form-GETapi-shiporders" data-method="GET" data-path="api/shiporders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-shiporders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-shiporders" onclick="tryItOut('GETapi-shiporders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-shiporders" onclick="cancelTryOut('GETapi-shiporders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-shiporders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/shiporders</code></b>
</p>
</form>


## api/shiptos




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/shiptos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/shiptos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Name 1",
        "address": "Address 1",
        "city": "City 1",
        "country": "Country 1",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 2,
        "name": "Name 2",
        "address": "Address 2",
        "city": "City 2",
        "country": "Country 2",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 3,
        "name": "Name 3",
        "address": "Address 3",
        "city": "City 3",
        "country": "Country 3",
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    }
]
```
<div id="execution-results-GETapi-shiptos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-shiptos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shiptos"></code></pre>
</div>
<div id="execution-error-GETapi-shiptos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shiptos"></code></pre>
</div>
<form id="form-GETapi-shiptos" data-method="GET" data-path="api/shiptos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-shiptos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-shiptos" onclick="tryItOut('GETapi-shiptos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-shiptos" onclick="cancelTryOut('GETapi-shiptos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-shiptos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/shiptos</code></b>
</p>
</form>


## api/items




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "title": "Title 1",
        "note": "Note 1",
        "quantity": 745,
        "price": 123.45,
        "shiporder_id": 1,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 2,
        "title": "Title 2",
        "note": "Note 2",
        "quantity": 45,
        "price": 13.45,
        "shiporder_id": 2,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 3,
        "title": "Title 3",
        "note": "Note 3",
        "quantity": 5,
        "price": 1.12,
        "shiporder_id": 3,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 4,
        "title": "Title 4",
        "note": "Note 4",
        "quantity": 2,
        "price": 77.12,
        "shiporder_id": 3,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    }
]
```
<div id="execution-results-GETapi-items" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-items"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-items"></code></pre>
</div>
<div id="execution-error-GETapi-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-items"></code></pre>
</div>
<form id="form-GETapi-items" data-method="GET" data-path="api/items" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-items', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-items" onclick="tryItOut('GETapi-items');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-items" onclick="cancelTryOut('GETapi-items');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-items" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/items</code></b>
</p>
</form>


## api/phones




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/phones" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/phones"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "number": "2345678",
        "pessoa": 1,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 2,
        "number": "1234567",
        "pessoa": 1,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 3,
        "number": "4444444",
        "pessoa": 2,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 4,
        "number": "7777777",
        "pessoa": 3,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    },
    {
        "id": 5,
        "number": "8888888",
        "pessoa": 3,
        "created_at": "2020-12-13T16:03:26.000000Z",
        "updated_at": "2020-12-13T16:03:26.000000Z"
    }
]
```
<div id="execution-results-GETapi-phones" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-phones"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-phones"></code></pre>
</div>
<div id="execution-error-GETapi-phones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-phones"></code></pre>
</div>
<form id="form-GETapi-phones" data-method="GET" data-path="api/phones" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-phones', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-phones" onclick="tryItOut('GETapi-phones');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-phones" onclick="cancelTryOut('GETapi-phones');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-phones" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/phones</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <form method="post" action="/upload" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="cAziZKwIybGywq7qx3IyP0efefxzzMBWHtuukIgz">
                <div class="form-group">
                    <label for="exampleFormControlFile1">XML Encomenda</label>
                    <input type="file" name="file-encomenda" class="form-control-file" id="file-encomenda">
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">XML Pessoa</label>
                    <input type="file" name="file-person" class="form-control-file" id="file-person" required>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## upload




> Example request:

```bash
curl -X POST \
    "http://localhost/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTupload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTupload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTupload"></code></pre>
</div>
<div id="execution-error-POSTupload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTupload"></code></pre>
</div>
<form id="form-POSTupload" data-method="POST" data-path="upload" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTupload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTupload" onclick="tryItOut('POSTupload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTupload" onclick="cancelTryOut('POSTupload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTupload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>upload</code></b>
</p>
</form>



