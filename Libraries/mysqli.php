# Private constructor to enforce singleton access
private function __construct($db = NULL) {

    # Connect to database using credentials supplied by environment.php     
    $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS);

    # If there are problems connecting...
    # Show full message on local, email message and die gracefully on live
    if(mysqli_connect_errno()) {
        if (IN_PRODUCTION) {

                # Email app owner
                $subject = "SQL Error";
                $body    = "<h2>SQL Error</h2>";
                $body   .= mysqli_connect_error();
                $body   .= "<h2>Query History</h2>";

                foreach($this->query_history as $k => $v) {
                    $body .= $k." = ".$v."<br>";
                }

                Utils::alert_admin($subject, $body);

                # Show a nice cryptic error
                die("<h2>There's been an error processing your request (#DB49)</h2>");

            } else {                
                die("SQL Error: ".mysqli_connect_error());
            }
    } 

    # Use utf8 character encoding
    $this->connection->set_charset("utf8");

}
