<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP WEB SERVICES API</title>
</head>


<body>
    <div class="container mt-1">
        <h3>What is API?</h3>
        <p>An API, or application programming interface, is a set of defined rules that enable different applications to communicate with each other. It acts as an intermediary layer that processes data transfers between systems, letting companies open their application data and functionality to external third-party developers, business partners, and internal departments within their companies.</p>


        <h3>API benefits?</h3>
        <p>APIs simplify design and development of new applications and services, and integration and management of existing ones. But they offer other significant benefits to developers and organizations at large.</p>

        <h3>Types of APIs?</h3>
        <p><b>Open APIs </b> are open-source application programming interfaces you can access with the HTTP protocol. Also known as <b>public APIs,</b> they have defined API endpoints and request and response formats.</p>
        <p><b>Partner APIs </b> connect strategic business partners. Typically, developers access these APIs in self-service mode through a public API developer portal. Still, they need to complete an onboarding process and get login credentials to access partner APIs.</p>
        <p><b>Internal APIs </b> remain hidden from external users. These private APIs aren't available for users outside of the company and are instead intended to improve productivity and communication across different internal development teams.</p>
        <p><b>Composite APIs </b> combine multiple data or service APIs. They allow programmers to access several endpoints in a single call. Composite APIs are useful in microservices architecture where performing a single task may require information from several sources.</p>

        <h3>API protocols?</h3>
        <p><b>SOAP (Simple Object Access Protocol): </b>Built with XML, SOAP enables endpoints to send and receive data through SMTP and HTTP. SOAP APIs make it easier to share information between apps or software components that are running in different environments or written in different languages.</p>
        <p><b>XML-RPC (XML-Remote Procedure Call):</b> The XML-RPC protocol relies on a specific XML format to transfer data. XML-RPC is older than SOAP, but much simpler, and relatively lightweight in that it uses minimum bandwidth.</p>
        <p><b>JSON-RPC: </b> Like XML-RPC, JSON-RPC is a remote procedure call, but JSON (JavaScript Object Notation) is used instead of XML to transfer the data.</p>
        <p><b>REST (Representational State Transfer):</b> REST is a set of web API architecture principles. REST APIs—also known as a RESTful API—are APIs that adhere to certain REST architectural constraints. It's possible to build RESTful APIs with SOAP protocols, but the two standards are usually viewed as competing specifications.</p>
        <p>Traditionally, API referred to an interface connected to an application created with any of the low-level programming languages, such as Javascript. Modern APIs, however, adhere to REST principles and the JSON format.</p>

        <ul>
            <h3> REST Constraints </h3>
            The following constraints define the RESTfulness of an application or service.
            <li>Client-Server architecture</li>
            <li>Statelessness</li>
            <li>Uniform interface</li>
            <li>Layered system</li>
            <li>Cacheability</li>
            <li>Code on Demand</li>
        </ul>

        <ul>
            <h3>Uses of RESTful API</h3>
            <li>As an interface with multi-platform support which is used to access resources from outside applications coded in various programming languages like PHP, JAVA, Android and more.</li>
            <li>REST is the simple architectural style for transmitting data over HTTP.</li>
            <li>The REST API is the most suitable resource provider for an AJAX-based application interface which requires data to update UI without page reload.</li>
            <li>By meeting more of the REST constraints, the web applications or services can support a wide range of clients.</li>
            <li>The service request parameters can be sent via GET, PUT, and POST request methods.</li>

        </ul>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>