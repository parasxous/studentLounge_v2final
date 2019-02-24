<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/igi.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <nav>
            <div class="row">
                <div class="offset-md-1 col-md-2">
                    <img class="logo image-fluid" src="images/logo.png" alt="image-responsive">
                </div>
                <div class="offset-md-5 col-md-3">
                    <ul class="nav justify-content-end">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Αρχική</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explore.php">Αναζήτηση</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Επικοινωνία</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="col-md-12 profile-background">
            <div class="row">
                <div class="offset-md-1 col-md-3">
                    <img class="profilePic img-fluid" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-img" />
                </div>
                <div class="col-md-2">
                    <p class="profile-username">@Parasxous</p>
                    <p class="profile-age">24</p>
                    <p class="profile-city">Τρίκαλα</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="offset-md-4 col-md-5">
                <ul class="nav nav-pills mb-3 whitespace" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Αρχική</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Φωτογραφίες Σπιτιού</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Επεξεργασία προφίλ</a>
                    </li>
                    </ul>
              </div>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="col-md-12 grayspace">
                <div class="offset-md-1 col-md-7">
                  <h4 class="profile-information">Πληροφορίες</h4>
                </div>
            <div class="col-md-3 new-members">
              <h4 class="profile-information2">Νέα Μέλη</h4>
              <div class="row">
                <div class="col-md-12">
                  <img class="newmember-photo img-thumbnail" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-img">

                  <img class="newmember-photo2 img-thumbnail" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-img">
                </div>
              </div>


            <div class="row">
              <div class="col-md-12">
                <p class="newmember-name">Πάρης Καραμπάς</p>
                <p class="newmember-name2">Πάρης Καραμπάς</p>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <img class="newmember-photo img-thumbnail" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-img">

                <img class="newmember-photo2 img-thumbnail" src="images/43914576_262438344454636_2728703683628892160_n.jpg" alt="responsive-img">
              </div>
            </div>


          <div class="row">
            <div class="col-md-12">
              <p class="newmember-name">Πάρης Καραμπάς</p>
              <p class="newmember-name2">Πάρης Καραμπάς</p>
            </div>
          </div>



            </div>

            <div class="offset-md-1 col-md-7 profile-input">
              <div class="row">
                <div class="col-md-2">
                  <p class="profile-info">Όνομα</p>
                </div>
            <div class="offset-md-2 col-md-4">
                <p class="profile-info2">Πάρης Καραμπάς</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7 profile-input2">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Ημερομηνια Γέννησης</p>
                </div>
            <div class="offset-md-1 col-md-4">
                <p class="profile-info2">25/3/1980</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7 profile-input3">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Πόλη</p>
                </div>
            <div class="offset-md-1 col-md-4">
                <p class="profile-info2">Τρίκαλα</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7 profile-input2">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Φύλο</p>
                </div>
            <div class="offset-md-1 col-md-4">
                <p class="profile-info2">Άντρας</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7 profile-input3">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Ψάχνει Για</p>
                </div>
            <div class="offset-md-1 col-md-4">
              <p class="profile-info2">Σπίτι</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7">
              <h4 class="profile-information2">Ενδιαφέροντα</h4>
            </div>

            <div class="offset-md-1 col-md-7 profile-input4">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Χόμπυ</p>
                </div>
            <div class="offset-md-1 col-md-4">
              <p class="profile-info2">Τρέξιμο,Ταξίδια,Μουσική,</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-7 profile-input2">
              <div class="row">
                <div class="col-md-3">
                  <p class="profile-info">Καπνιστής</p>
                </div>
            <div class="offset-md-1 col-md-4">
              <p class="profile-info2">Όχι</p>
            </div>
              </div>
            </div>

            <div class="offset-md-1 col-md-2">
              <form action="">
                <input class="submit-button3" type="submit" name="submit" value="Γίνε Συγκάτοικος"/>
              </form>
            </div>


          </div>

      </div>

        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="col-md-12 grayspace3">
                <div class="offset-md-1 col-md-10">
                  <h4 class="profile-information">Φωτογραφίες</h4>
                </div>
                <div class="offset-md-1 col-md-10">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="house-pic" class="house-pic" ><img src="images/photo.png"/></label>
                    <form action="">
                      <input id="house-pic" type="file" name="housePic" accept="image/*"/>
                    </form>
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>
                </div>
                </div>

                <div class="offset-md-1 col-md-10">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>
                </div>
                </div>

                <div class="offset-md-1 col-md-10">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>

                    <div class="offset-md-1 col-md-3">
                      <img class="house-image" src="images/roberto-nickson-g-772172-unsplash.jpg" />
                    </div>
                </div>
                </div>
            </div>
        </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="col-md-12 grayspace2">
                    <div class="offset-md-1 col-md-7">
                      <h4 class="profile-information">Επεξεργασία Προφίλ</h4>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Όνομα</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="edit-input" type="text" name="name" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input2">
                      <div class="row">
                        <div class="col-md-2">
                          <p class="profile-info">Κωδικος</p>
                        </div>
                    <div class="offset-md-2 col-md-4">
                      <form action="">
                        <input class="edit-input" type="password" name="password" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input3">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Ημερομηνια Γέννησης</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="edit-input" type="text" name="birthday" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input2">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Πόλη</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="edit-input" type="text" name="city" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input3">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Φύλο</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="radio" type="radio" name="gender" value="male" /> Άντρας
                        <input class="radio" type="radio" name="gender" value="female" /> Γυναίκα
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input2">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Ψάχνει για</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="radio" type="radio" name="lookingFor" value="house" /> Σπίτι
                        <input class="radio" type="radio" name="lookingFor" value="roomate" /> Συγκάτοικο
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input3">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Χόμπυ</p>
                        </div>
                    <div class="offset-md-1 col-md-8">
                      <form action="">
                        <input class="checkbox" type="checkbox" name="athlete" /> Αθλητισμός
                        <input class="checkbox" type="checkbox" name="travel"  /> Ταξίδια
                        <input class="checkbox" type="checkbox" name="boardgame" /> Επιτραπέζια
                        <input class="checkbox" type="checkbox" name="movies"  /> Ταινίες
                        <input class="checkbox" type="checkbox" name="books"  /> Βιβλία
                        <input class="checkbox" type="checkbox" name="music"  /> Μουσική
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input2">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Καπνιστής</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="radio" type="radio" name="smokeYes" value="yes" /> Ναί
                        <input class="radio" type="radio" name="smokeNo" value="no" /> Όχι
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input3">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Φωτογραφία Προφίλ</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="edit-input" type="file" name="profilePic" accept="image/*" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-1 col-md-7 profile-input2">
                      <div class="row">
                        <div class="col-md-3">
                          <p class="profile-info">Φωτογραφία Εξωφύλου</p>
                        </div>
                    <div class="offset-md-1 col-md-4">
                      <form action="">
                        <input class="edit-input" type="file" name="coverPic" accept="image/*" />
                      </form>
                    </div>
                      </div>
                    </div>

                    <div class="offset-md-4 col-md-2">
                      <div class="row">
                        <div class="offset-md-2 col-md-2">
                          <form action="">
                            <input class="submit-button" type="submit" name="submit" value="Αποθήκευση"/>
                          </form>
                        </div>
                        <div class="offset-md-5 col-md-2">
                          <form action="">
                            <input class="submit-button2" type="submit" name="logOut" value="Αποσύνδεση"/>
                          </form>
                        </div>
                      </div>
                    </div>


                </div>

            </div>
                  </div>
            </div>
        </div>


    </div>

    <footer>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Αρχική</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">Σχετικά με εμάς</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Επικοινωνία</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="logo image-fluid" src="images/logo.png" alt="image-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="img-fluid social" src="images/iconfinder_facebook_2142575.png" alt="responsive-image">
                <img class="img-fluid social" src="images/iconfinder_instagram_2142569.png" alt="responsive-image">
                <img class="img-fluid social" src="images/iconfinder_mail_2142571.png" alt="responsive-image">
                <img class="img-fluid social" src="images/iconfinder_linkedin_2142574.png" alt="responsive-image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="copyright">© 2018-2019 Student Lounge Inc.</h5>
            </div>
        </div>
    </footer>
</body>
</html>