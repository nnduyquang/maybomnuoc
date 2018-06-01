<style>
    #fe_common_top_smallmenu ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #fe_common_top_smallmenu ul li{
        display: inline-flex;
        font-size: 14px;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: black;
        padding: 6px;
        font-size: 14px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        border-radius: 5px;
        opacity: 0.3;
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        transition: .3s;
        text-align: left;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        opacity: 1;
        margin-top: 10px;
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: transparent;
    }
</style>

<ul>
    <li><div class="dropdown">
            <button class="dropbtn">Home <i class="fas fa-angle-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Shop <i class="fas fa-angle-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Blog <i class="fas fa-angle-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Pages <i class="fas fa-angle-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div></li>
    <li>Contact</li>
</ul>