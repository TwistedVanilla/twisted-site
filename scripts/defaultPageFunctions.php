<?php
    class PageDetails {
        public $title;
        
        function __construct($title) {
            $this->title = $title;
        }
        
        function set_default_head() {
            $this->set_default_page_title();
            $this->set_default_stylesheet();
        }
        
        function create_default_body_top() {
            $this->create_login_bar();
            $this->create_default_header();
            $this->create_default_nav_bar();
        }
        
        function create_default_body_bottom() {
            $this->create_default_footer();
        }
        
        function set_default_stylesheet() {
            print '<link type="text/css" rel=stylesheet href="stylesheets/stylesheet.css"/>';
        }
        
        function set_default_page_title() {
            print '<title>'.$this->title.': </title>';
        }
        
        function create_login_bar() {
            print '<nav class="login_bar"><ul>';
            
            if (empty($_SESSION['username'])) {
                print '<li><a href="createNewAccount.php">Create Account</a></li><li><a href="login.php">Login</a></li>';
            }
            else if (!empty($_SESSION['username'])) {
                print "<li>Welcome ".$_SESSION['username']."!</li>";
                if ($_SESSION['isStaff'] == true) {
                    print '<li><a href="createNewAccount.php">Create New Staff Account</a></li>';
                    print '<li><a href="view_adoptions.php">View All Adoption Requests</a></li>';
                }
                else if ($_SESSION['isStaff'] == false) {
                    print '<li><a href="view_adoptions.php">View Your Adoptions</a></li>';
                }
                print '<li><a href="logout.php">Logout</a></li>';
            }
            
            print '</ul></nav>';
        }

        function create_default_header() {
            print '<header class="header">
                <h1>Twisted Vanilla</h1>
                <p>'.$this->title.'</p>
            </header>';
        }
        
        function create_default_nav_bar() {
            print '<nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="view_animals.php">View Animals</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>';
        }
        
        function create_default_footer() {
            print '<footer>
                <ul>
                    <li><a href="bethlong.blog.com">Website Design: Elisabeth Long</a></li>
                    <li>Copyright: TwistedVanilla, Elisabeth Long</li>
                </ul>
            </footer>';
        }
    }
?>