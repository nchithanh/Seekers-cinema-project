            <?php  
             if (isset($_POST['thongbaophim']) ){
                require_once 'Mail.php';
                require_once 'Mail/mime.php';
                //tao chung thuc mail
                $smtp=array();
                $smtp['host']='ssl://smtp.gmail.com';
                $smtp['port']='465';
                $smtp['auth']=true;
                $smtp['username']='hotboyalonebmt@gmail.com';
                $smtp['password']='0923535317';
                //tao doi tuong goi mail
                $mailer=Mail::factory('smtp',$smtp);
                //nguoi goi
                $from = "hotboyalonebmt@gmail.com";
                //nguoi nhan
                $to = ''.$_SESSION['mail'].'';
                $subject = "Thong bao dat ve xem phim";
                //tao header cho mail
                $headers = array ('From' => $from,'To' => $to,'Subject' => $subject);
                $mimeparams=array();
                $mimeparams['text_encoding']="8bit"; 
                $mimeparams['text_charset']="UTF-8"; 
                $mimeparams['html_charset']="UTF-8"; 
                $mimeparams['head_charset']="UTF-8"; 
               
                $body = '<html><body>';
                $body .= '<h1 style="color:#f40;">Thông Báo Đặt Vé !</h1>
                         
                          <p style="color:#080;font-size:18px;">Chúng Tôi Sẽ gửi cho bạn thông tin sớm nhất</p>';
                $body .= '</body></html>';
                $mime = new Mail_mime($mimeparams);
                // $mime->addHTMLImage("../view/images/3.jpg", "image/jpeg");
                $mime->setHTMLBody($body);
                //$mime->addAttachment("assets/images/female.png", "image/jpeg" );
                $body=$mime->get();
                //tao header cho mail voi mime
                $headers = $mime->headers($headers);
    
                $mail = $mailer->send($to, $headers, $body);
    //check send mail
                if (PEAR::isError($mail)) 
                {
                    $alert="<p>" . $mail->getMessage() . "</p>";
                } 
                else 
                {
                    $alert='  <div id="thanhcong">
                    <div class="top">
                        <p><i class="fa fa-check-circle"></i></p>
                        <p>Đăng kí Thành công</p>
                        <p> Bạn sẽ nhận thông báo khi có lịch chiếu </p>
                    </div>
                    <div class="bottom">
                    <span></span>
                    <button onclick="close_thanhcongbox()">Cancel</button>
                    </div>
                </div>';
                }
                include '../view/mail.php';
             }
            
           ?> 