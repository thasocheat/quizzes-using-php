<script type="text/javascript" language="JavaScript">
   
    // Set three minute
    setTimeout(function () {
        //   location.href = history.back(); 
    }, (60 * 1000 * 2));

    // To Change Color of time when it less than 
    var text = document.getElementById('demo');
    text.addEventListener("load", init(), false);

    // Default Color is green
    function defaultColor() {
        text.style.color = "green";
    }

    // Change Color to red
    function changeColor() {
        text.style.color = "#F00";
    }

    // Now function to change
    function init() {
        setTimeout(defaultColor);
        // Change Color from green to red when time less than 1 miuntes
        setTimeout(changeColor, 60000);
    }
    
</script>

<link rel="stylesheet" href="style/quize.css">
<style>
    
    .go-down{
        margin-top: 100px;
    }
    h5{
        line-height: 35px;
    }
    .error{
        color: red;
    }
</style>
<script>
    // Check input
    function validateForm() {
        let a = document.forms["myForm"]["question-1-answers"].value;
        let b = document.forms["myForm"]["question-2-answers"].value;
        let c = document.forms["myForm"]["question-3-answers"].value;
        let d = document.forms["myForm"]["question-4-answers"].value;
        let e = document.forms["myForm"]["question-5-answers"].value;
        let f = document.forms["myForm"]["question-6-answers"].value;
        if (a == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
        if (b == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
        if (c == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
        if (d == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
        if (e == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
        if (f == "") {
            alert("សូមជ្រើសរើសចំម្លើយ,  Choose Your Answers!!!");
            return false;
        }
    }
</script>


<!-- <div class="timer">
    <p id="demo"></p>
</div> -->
<div class="container-fluid">
    <form method="post" action="result/html.php" name="myForm" id="quiz" onsubmit="return validateForm()">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col go-down">
                <!-- Question 1 -->
                <div>
                    
                    <h5>តើ HTML comments ចាប់ផ្តើមដោយ &lt;!-- និងបញ្ចប់ដោយ --&gt;</h5>
                                                   
                    <div>
                        <label for="question-1-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-1-answers" id="question-1-answers-A" value="A" />
                        A) ត្រូវ </label>
                    </div>
                    
                    <div>
                        <label for="question-1-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-1-answers" id="question-1-answers-B" value="B" />
                        B) ខុស </label>
                    </div>
                    
                </div>                    
            </div>

            <div class="col go-down">
                <!-- Question 2 -->
                <div>
                    
                    <h5>តើធាតុ HTML មួយណាដែលបញ្ជាក់ថាជាផ្នែកជើងនៃ document ឬ section?</h5>
                                
                    <div>
                        <label for="question-2-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-2-answers" id="question-2-answers-A" value="A" />
                        A) &lt;section&gt; </label>
                    </div>
                    
                    <div>
                        <label for="question-2-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-2-answers" id="question-2-answers-B" value="B" />
                        B) &lt;bottom&gt; </label>
                    </div>
                    
                    <div>
                        <label for="question-2-answers-C">
                        <input type="radio" class="option-input checkbox" name="question-2-answers" id="question-2-answers-C" value="C" />
                        C) &lt;footer&gt; </label>
                    </div>
                    
                    
                </div>                    
            </div>

            <div class="col go-down">
                <!-- Question 3 -->
                <div>
                    
                    <h5>នៅក្នុង HTML តើ onblur និង onfocus គេហៅវាជាអ្វី?</h5>
                                
                    <div>
                        <label for="question-3-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-3-answers" id="question-3-answers-A" value="A" />
                        A) HTML elements </label>
                    </div>
                    
                    <div>
                        <label for="question-3-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-3-answers" id="question-3-answers-B" value="B" />
                        B) Even attributes </label>
                    </div>
                    
                    <div>
                        <label for="question-3-answers-C">
                        <input type="radio" class="option-input checkbox" name="question-3-answers" id="question-3-answers-C" value="C" />
                        C) Style attributes </label>
                    </div>
                    
                </div>                    
            </div>

            <div class="col go-down">
                <!-- Question 4 -->
                <div>
                    
                    <h5>តើធាតុ HTML &lt;canvas&gt; ត្រូវបានគេប្រើសម្រាប់ធ្វើអ្វី?</h5>
                                
                    <div>
                        <label for="question-4-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-4-answers" id="question-4-answers-A" value="A" />
                        A) គូស graphics </label>
                    </div>
                    
                    <div>
                        <label for="question-4-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-4-answers" id="question-4-answers-B" value="B" />
                        B) បង្កើតធាតុដែលអាចអូសបាន </label>
                    </div>
                    
                    <div>
                        <label for="question-4-answers-C">
                        <input type="radio" class="option-input checkbox" name="question-4-answers" id="question-4-answers-C" value="C" />
                        C) បង្ហាញ database records </label>
                    </div>
                    
                    <div>
                        <label for="question-4-answers-D">
                        <input type="radio" class="option-input checkbox" name="question-4-answers" id="question-4-answers-D" value="D" />
                        D) រៀបចំទិន្នន័យនៅក្នុង MySQL </label>
                    </div>
                    
                    
                </div>                    
            </div>

            <div class="col go-down">
                <!-- Question 5 -->
                <div>
                    
                    <h5>តើ input type មួយណាដែលបញ្ជាក់អំពី slider control?</h5>
                                
                    <div>
                        <label for="question-5-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-5-answers" id="question-5-answers-A" value="A" />
                        A) controls </label>
                    </div>
                    
                    <div>
                        <label for="question-5-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-5-answers" id="question-5-answers-B" value="B" />
                        B) search </label>
                    </div>
                    
                    <div>
                        <label for="question-5-answers-C">
                        <input type="radio" class="option-input checkbox" name="question-5-answers" id="question-5-answers-C" value="C" />
                        C) slider </label>
                    </div>
                    
                    <div>
                        <label for="question-5-answers-D">
                        <input type="radio" class="option-input checkbox" name="question-5-answers" id="question-5-answers-D" value="D" />
                        D) range </label>
                    </div>
                    
                    
                </div>                    
            </div>

            <div class="col go-down">
                <!-- Question 6 -->
                <div>
                    
                    <h5>តើធាតុ HTML មួយណាដែលបញ្ជាក់អំពី header នៃ document ឬ section?</h5>
                                
                    <div>
                        <label for="question-6-answers-A">
                        <input type="radio" class="option-input checkbox" name="question-6-answers" id="question-6-answers-A" value="A" />
                        A) &lt;section&gt; </label>
                    </div>
                    
                    <div>
                        <label for="question-6-answers-B">
                        <input type="radio" class="option-input checkbox" name="question-6-answers" id="question-6-answers-B" value="B" />
                        B) &lt;head&gt; </label>
                    </div>
                    
                    <div>
                        <label for="question-6-answers-C">
                        <input type="radio" class="option-input checkbox" name="question-6-answers" id="question-6-answers-C" value="C" />
                        C) &lt;header&gt; </label>
                    </div>
                    
                    <div>
                        <label for="question-6-answers-D">
                        <input type="radio" class="option-input checkbox" name="question-6-answers" id="question-6-answers-D" value="D" />
                        D) &lt;top&gt; </label>
                    </div>
                    
                    
                </div>                    
            </div>
                
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <!-- <input type="submit" value="Submit Quiz" /> -->
                <a href="start-quizes.php" class="start-quize">Back</a>
                <button class="start-quize" type="submit" value="Submit Quiz">Submit Quiz</button>
                
            </div>
        </div>
    </form>
</div>


<div class="modal" tabindex="-1" id="my_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title"></h4><br> -->
                <h5 class="modal-title">អស់ម៉ោង <span id="show_time"></span></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal();"></button> -->
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeModal();">Close</button> -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.reload();">Play Again</button>
            </div>
        </div>
    </div>
</div>


<script>
     // now close 
     function closeModal(){
        my_modal.style.display = "none";
    }
    // Set the date we're counting down to
    var countDownDate = (new Date().getTime() + (60 * 1000 * 2));
    // Update the count down every 1 second
    var x = setInterval(function() {
    
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      //  var days = Math.floor(distance / (1000 * 60 * 60 * 24));days + "d " + 
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);

        // When time is run out hidde the time
        document.getElementById("demo").innerHTML = "";

        // When time run out the modal will  show
        document.getElementById("my_modal").style.display = "block";
      }
    }, 1000);

    
</script>

  