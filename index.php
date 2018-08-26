<?php

$missing = $_GET['fieldsMissing'];
$terms = $_GET['agreeTerms'];
$password = $_GET['passwordsDifferent'];

   if(isset($missing)){
       ?>
       <div class="error">
           <p>Veuillez remplir tout le formulaire</p>
       </div>
       <?php
   } else if(isset($terms)){
       ?>
        <div class="error">
           <p>Vous devez accepter les conditions générales de ventes</p>
       </div>
       <?php
   } else if(isset($password)){
       ?>
        <div class="error">
           <p>Vous avez entrer deux mot de passe différents</p>
       </div>
       <?php
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/gh/mobius1/selectr@latest/dist/selectr.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Subskill Test</title>
</head>

<body>

    <section class="form">
        <div class="form-left">
            <div class="form-left_container">
                <div class="return">
                    <a href="#" class="return-img">
                        <img src="assets/img/arrow-return.svg" alt="arrow-return">
                    </a>
                    <a href="#">
                        <p>Retour</p>
                    </a>
                </div>

                <div class="content">
                    <p class="content-subtitle">lorem ipsum dolores atum eramea</p>
                    <h4 class="content-title">Rege Persarum bellis finitimis iniglu </h4>
                    <p class="content-desc">Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum bibendum. Duis.</p>
                </div>
            </div>
        </div>
        <div class="form-right">
            <div class="return return--mobile">
                <a href="#" class="return-img">
                    <img src="assets/img/arrow-return-mobile.svg" alt="arrow-return">
                </a>
                <a href="#">
                    <p>Retour</p>
                </a>
            </div>
            <h2 class="form-right_title">Créer un compte</h2>
            <h4 class="form-right_subtitle">Veuillez renseigner les informations ci-dessous.</h4>
            <form action="php/add.php" method="POST" class="signIn">
                <div class="signIn-gender">
                    <p class="signIn-gender_title">Vous êtes</p>
                    <label>
                        <input type="radio" name="gender" value="Mr">
                        <span></span>
                        <p>Mr</p>
                    </label>

                    <label>
                        <input type="radio" name="gender" value="Mde">
                        <span></span>
                        <p>Mme</p>
                    </label>

                    <label>
                        <input type="radio" name="gender" value="Mme">
                        <span></span>
                        <p>Mme</p>
                    </label>
                </div>
                <input type="text" name="lastName" placeholder="Nom" value="" class="signIn-input">
                <input type="text" name="firstName" placeholder="Prénom" value="" class="signIn-input">
                <input type="text" name="email" placeholder="Email" value="" class="signIn-input">
                <div class="signIn-date">
                    <div class="signIn-date_items">
                        <select name="month" class="select-js">
                            <option selected>Date de naissance</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                    <div class="signIn-date_items">
                        <select name="year" class="select-js">
                            <option></option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2004</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                        </select>
                    </div>
                    <div class="signIn-date_items">

                        <select name="day" class="select-js">
                            <option></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>
                    </div>
                </div>
                <input type="text" name="postal" placeholder="Code Postal" value="" class="signIn-input">
                <div class="signIn-input_password">
                    <input type="password" name="password" placeholder="Mot de Passe" value="" class="signIn-input">
                    <svg width="16px" height="11px" viewBox="0 0 16 11" class="password-icons">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Signup" transform="translate(-926.000000, -514.000000)" fill="#A4A4A4">
                                <g id="Right" transform="translate(495.000000, 56.000000)">
                                    <path d="M439.000099,457.9999 C442.637896,457.9999 445.742192,460.28029 446.999783,463.50022 C445.742192,466.719576 442.637896,468.999952 439.000099,468.999952 C435.362302,468.999952 432.258006,466.719576 430.998838,463.50022 C432.258006,460.28029 435.362302,457.9999 439.000099,457.9999 Z M439.000099,467.16689 C441.007164,467.16689 442.637896,465.524256 442.637896,463.50022 C442.637896,461.476184 441.007164,459.833536 439.000099,459.833536 C436.993034,459.833536 435.362302,461.476184 435.362302,463.50022 C435.362302,465.524256 436.993034,467.16689 439.000099,467.16689 Z M439.000099,461.30054 C440.206884,461.30054 441.181831,462.282724 441.181831,463.50022 C441.181831,464.717142 440.206884,465.699886 439.000099,465.699886 C437.793314,465.699886 436.816771,464.717142 436.816771,463.50022 C436.816771,462.282724 437.793314,461.30054 439.000099,461.30054 Z" id="Combined-shape-25952"></path>
                                </g>
                            </g>
                        </g>
                    </svg>         
                </div>
                <div class="signIn-input_password">
                    <input type="password" name="confirmPassword" placeholder="Confirmation mot de passe" value="" class="signIn-input">
                    <svg width="16px" height="11px" viewBox="0 0 16 11" class="password-icons">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Signup" transform="translate(-926.000000, -514.000000)" fill="#A4A4A4">
                                <g id="Right" transform="translate(495.000000, 56.000000)">
                                    <path d="M439.000099,457.9999 C442.637896,457.9999 445.742192,460.28029 446.999783,463.50022 C445.742192,466.719576 442.637896,468.999952 439.000099,468.999952 C435.362302,468.999952 432.258006,466.719576 430.998838,463.50022 C432.258006,460.28029 435.362302,457.9999 439.000099,457.9999 Z M439.000099,467.16689 C441.007164,467.16689 442.637896,465.524256 442.637896,463.50022 C442.637896,461.476184 441.007164,459.833536 439.000099,459.833536 C436.993034,459.833536 435.362302,461.476184 435.362302,463.50022 C435.362302,465.524256 436.993034,467.16689 439.000099,467.16689 Z M439.000099,461.30054 C440.206884,461.30054 441.181831,462.282724 441.181831,463.50022 C441.181831,464.717142 440.206884,465.699886 439.000099,465.699886 C437.793314,465.699886 436.816771,464.717142 436.816771,463.50022 C436.816771,462.282724 437.793314,461.30054 439.000099,461.30054 Z" id="Combined-shape-25952"></path>
                                </g>
                            </g>
                        </g>
                    </svg>                
                </div>
                <div class="signIn-conditions">
                    <input type="checkbox" name="conditions">
                    <span></span>
                    <p>J’accepte les
                        <a href="#">conditions générales de ventes</a> et les respecteraient sans conditions. </p>
                </div>

                <input type="submit" value="Créer un compte">
                <a href="#" class="logIn-button">Vous avez déjà un compte ? Connectez-vous</a>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/gh/mobius1/selectr@latest/dist/selectr.min.js" type="text/javascript"></script>
    <script src="index.js"></script>
</body>

</html>