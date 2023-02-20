<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "https://sanbuk-internship.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.13.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.13.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-experience" class="tocify-header">
                <li class="tocify-item level-1" data-unique="experience">
                    <a href="#experience">Experience</a>
                </li>
                                    <ul id="tocify-subheader-experience" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="experience-GETapi-v1-experiences">
                                <a href="#experience-GETapi-v1-experiences">GET api/v1/experiences</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-user" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user">
                    <a href="#user">User</a>
                </li>
                                    <ul id="tocify-subheader-user" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-auth">
                                <a href="#user-auth">Auth</a>
                            </li>
                                                            <ul id="tocify-subheader-user-auth" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-sign-up">
                                            <a href="#user-POSTapi-v1-auth-sign-up">Sign Up</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-sign-in">
                                            <a href="#user-POSTapi-v1-auth-sign-in">Sign In</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="user-POSTapi-v1-auth-verification">
                                            <a href="#user-POSTapi-v1-auth-verification">SMS Verification</a>
                                        </li>
                                                                    </ul>
                                                                                <li class="tocify-item level-2" data-unique="user-profile">
                                <a href="#user-profile">Profile</a>
                            </li>
                                                            <ul id="tocify-subheader-user-profile" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="user-GETapi-v1-user-profile">
                                            <a href="#user-GETapi-v1-user-profile">Get profile</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="user-DELETEapi-v1-user-profile">
                                            <a href="#user-DELETEapi-v1-user-profile">Delete profile</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 20, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://sanbuk-internship.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="experience">Experience</h1>

    

                                <h2 id="experience-GETapi-v1-experiences">GET api/v1/experiences</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-experiences">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://sanbuk-internship.test/api/v1/experiences" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/experiences"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-experiences">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
accept: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Rosalind Hauck MD&quot;,
            &quot;description&quot;: &quot;Vitae cupiditate cupiditate velit voluptas. Eius fugit id ullam minus maxime. Asperiores temporibus consequatur fugit reprehenderit et deserunt nam.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Destini Glover&quot;,
            &quot;description&quot;: &quot;Sunt aut eum non officiis qui reprehenderit. Occaecati harum ut sequi ut dolor quae nisi voluptatum. Ipsa eum sed quo molestiae asperiores quam qui cum. Tempora id sed sed aut reiciendis ratione sit.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Kamille Torp&quot;,
            &quot;description&quot;: &quot;Harum debitis qui ut officia tenetur vitae perspiciatis. Omnis quia animi officia voluptatem voluptatem. Qui cum eos autem consequatur. Dolorem non asperiores architecto sed quia.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Elouise Altenwerth&quot;,
            &quot;description&quot;: &quot;Non quidem impedit voluptas velit ut. Ea eaque error sunt. Tempora similique dolor nisi debitis explicabo.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Santa Gleichner&quot;,
            &quot;description&quot;: &quot;Ipsa quos possimus dolor amet quasi mollitia impedit. Incidunt dolores sunt facilis sunt eius cum. Ut magni harum accusantium laudantium non nihil eum.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Mr. Hazle Larson&quot;,
            &quot;description&quot;: &quot;Magni maiores ad est qui et id voluptatibus adipisci. Cum omnis velit beatae perferendis blanditiis quae dolore eveniet. Ut veniam eos in rerum.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Layne Abbott&quot;,
            &quot;description&quot;: &quot;At autem ab ducimus possimus praesentium. Eaque sed excepturi qui.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Alexa Kovacek&quot;,
            &quot;description&quot;: &quot;Autem quia velit deleniti numquam. Nostrum molestiae sed nihil. Et vel aliquam nam qui iure et. Temporibus eos facere vel omnis quia quia. Similique in ea accusantium ipsum quia.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Theo Schmidt&quot;,
            &quot;description&quot;: &quot;Exercitationem excepturi suscipit voluptatem asperiores nisi aut iste. Exercitationem saepe alias consequatur amet rerum. Rerum ut dolor corrupti enim eligendi omnis quo.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Cleora Kerluke&quot;,
            &quot;description&quot;: &quot;Dolorem porro assumenda aut neque. Omnis velit velit eum. Voluptatibus odit omnis minus numquam mollitia. Provident eum et nihil vel possimus voluptas. Sint aut sit vitae autem animi voluptates cum.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 2,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Coy Metz&quot;,
            &quot;description&quot;: &quot;Repellat ipsa harum vero quo repellat et. Ea adipisci reprehenderit consequatur molestiae vel iure. Omnis assumenda voluptas et aut. Veniam quasi ea dolorem necessitatibus sunt ea.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Dr. Alicia Stanton&quot;,
            &quot;description&quot;: &quot;Eos vero sint veniam et. Dolor quod sequi sunt maiores quos cumque dolores.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Hillary Orn&quot;,
            &quot;description&quot;: &quot;Nesciunt autem hic qui unde neque. Nobis et unde tempore dignissimos nostrum sed. Eos sit ducimus qui quaerat possimus aperiam necessitatibus.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Braxton Daugherty&quot;,
            &quot;description&quot;: &quot;Voluptas dolorem eum sed culpa. Ducimus est facilis nemo facilis id repudiandae harum. Enim similique consectetur qui quia.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Prof. Maud Auer&quot;,
            &quot;description&quot;: &quot;Sed harum quisquam impedit et voluptatem impedit. Dolore ut ratione dolores et blanditiis. Assumenda voluptas magni ea odit esse. Quaerat debitis ut ipsum ut omnis.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Marty Becker&quot;,
            &quot;description&quot;: &quot;Sunt dolor eligendi a illum est. Velit aliquam magnam ut omnis qui est. Dolorem dolorum amet error soluta expedita aliquid.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 1,
            &quot;type_id&quot;: 2,
            &quot;trip_type_id&quot;: 1,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 1,
            &quot;name&quot;: &quot;Talia Keebler MD&quot;,
            &quot;description&quot;: &quot;Iure enim placeat est. Explicabo vitae itaque veritatis quidem quis vero. Autem a repellendus illum vero.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 3,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 2,
            &quot;name&quot;: &quot;Neha Welch DVM&quot;,
            &quot;description&quot;: &quot;Aut est nam enim voluptas autem repellat autem. Dolores cumque et omnis dolor at pariatur voluptatem. Temporibus reprehenderit quia inventore autem. Consequatur veniam iure ea dicta nostrum.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 3,
            &quot;type_id&quot;: 3,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 3,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Miss Karianne Bartell IV&quot;,
            &quot;description&quot;: &quot;Quisquam nihil culpa id vel. Non voluptatem id vero voluptatem voluptatum saepe quam. Aperiam eius quisquam ex dolorum voluptates sequi. Aperiam porro laborum incidunt nihil earum quia sint.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;status&quot;: 1,
            &quot;vendor_id&quot;: 2,
            &quot;type_id&quot;: 1,
            &quot;trip_type_id&quot;: 2,
            &quot;charter_type_id&quot;: 1,
            &quot;departure_id&quot;: 3,
            &quot;name&quot;: &quot;Lafayette Erdman&quot;,
            &quot;description&quot;: &quot;Modi nemo rerum similique vitae. Assumenda atque et consequatur quis. Esse aut sapiente debitis numquam. Illo laborum porro eaque natus.&quot;,
            &quot;created_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-02-20T15:20:35.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-experiences" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-experiences"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-experiences" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-experiences" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-experiences"></code></pre>
</span>
<form id="form-GETapi-v1-experiences" data-method="GET"
      data-path="api/v1/experiences"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-experiences', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-experiences"
                    onclick="tryItOut('GETapi-v1-experiences');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-experiences"
                    onclick="cancelTryOut('GETapi-v1-experiences');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-experiences" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/experiences</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-experiences"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-experiences"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="user">User</h1>

    

                        <h2 id="user-auth">Auth</h2>
                                                    <h2 id="user-POSTapi-v1-auth-sign-up">Sign Up</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-sign-up">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://sanbuk-internship.test/api/v1/auth/sign-up" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"first_name\": \"deleniti\",
    \"last_name\": \"voluptatem\",
    \"phone\": \"et\",
    \"email\": \"powlowski.aurelio@example.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/auth/sign-up"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "deleniti",
    "last_name": "voluptatem",
    "phone": "et",
    "email": "powlowski.aurelio@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-sign-up">
</span>
<span id="execution-results-POSTapi-v1-auth-sign-up" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-sign-up"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-sign-up" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-sign-up" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-sign-up"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-sign-up" data-method="POST"
      data-path="api/v1/auth/sign-up"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-sign-up', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-sign-up"
                    onclick="tryItOut('POSTapi-v1-auth-sign-up');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-sign-up"
                    onclick="cancelTryOut('POSTapi-v1-auth-sign-up');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-sign-up" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/sign-up</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="first_name"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="last_name"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="voluptatem"
               data-component="body">
    <br>
<p>Example: <code>voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-v1-auth-sign-up"
               value="powlowski.aurelio@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>powlowski.aurelio@example.net</code></p>
        </div>
        </form>

                    <h2 id="user-POSTapi-v1-auth-sign-in">Sign In</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-sign-in">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://sanbuk-internship.test/api/v1/auth/sign-in" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"repudiandae\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/auth/sign-in"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "repudiandae"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-sign-in">
</span>
<span id="execution-results-POSTapi-v1-auth-sign-in" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-sign-in"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-sign-in" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-sign-in" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-sign-in"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-sign-in" data-method="POST"
      data-path="api/v1/auth/sign-in"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-sign-in', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-sign-in"
                    onclick="tryItOut('POSTapi-v1-auth-sign-in');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-sign-in"
                    onclick="cancelTryOut('POSTapi-v1-auth-sign-in');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-sign-in" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/sign-in</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-sign-in"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-sign-in"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-v1-auth-sign-in"
               value="repudiandae"
               data-component="body">
    <br>
<p>Example: <code>repudiandae</code></p>
        </div>
        </form>

                    <h2 id="user-POSTapi-v1-auth-verification">SMS Verification</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-verification">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://sanbuk-internship.test/api/v1/auth/verification" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"eveniet\",
    \"code\": \"ex\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/auth/verification"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "eveniet",
    "code": "ex"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-verification">
</span>
<span id="execution-results-POSTapi-v1-auth-verification" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-verification"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-verification" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-verification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-verification"></code></pre>
</span>
<form id="form-POSTapi-v1-auth-verification" data-method="POST"
      data-path="api/v1/auth/verification"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-verification', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-verification"
                    onclick="tryItOut('POSTapi-v1-auth-verification');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-verification"
                    onclick="cancelTryOut('POSTapi-v1-auth-verification');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-verification" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/verification</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-auth-verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-auth-verification"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone"                data-endpoint="POSTapi-v1-auth-verification"
               value="eveniet"
               data-component="body">
    <br>
<p>Example: <code>eveniet</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>code</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="code"                data-endpoint="POSTapi-v1-auth-verification"
               value="ex"
               data-component="body">
    <br>
<p>Example: <code>ex</code></p>
        </div>
        </form>

                                <h2 id="user-profile">Profile</h2>
                                                    <h2 id="user-GETapi-v1-user-profile">Get profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://sanbuk-internship.test/api/v1/user/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/user/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-user-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-user-profile" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-user-profile"></code></pre>
</span>
<form id="form-GETapi-v1-user-profile" data-method="GET"
      data-path="api/v1/user/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-user-profile"
                    onclick="tryItOut('GETapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-user-profile"
                    onclick="cancelTryOut('GETapi-v1-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="user-DELETEapi-v1-user-profile">Delete profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-user-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "https://sanbuk-internship.test/api/v1/user/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "Authorization: Bearer "</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://sanbuk-internship.test/api/v1/user/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer ",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-user-profile">
</span>
<span id="execution-results-DELETEapi-v1-user-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-user-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-user-profile" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-user-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-user-profile"></code></pre>
</span>
<form id="form-DELETEapi-v1-user-profile" data-method="DELETE"
      data-path="api/v1/user/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-user-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-user-profile"
                    onclick="tryItOut('DELETEapi-v1-user-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-user-profile"
                    onclick="cancelTryOut('DELETEapi-v1-user-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-user-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/user/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-user-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-user-profile"
               value="Bearer "
               data-component="header">
    <br>
<p>Example: <code>Bearer</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
