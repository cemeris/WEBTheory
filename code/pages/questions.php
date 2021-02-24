<header>
  <nav class="navbar">
    <div class="navbar-top">
      <div class="navbar-left">
        <a id="collapse" href="#">
          <svg
            width="45"
            height="30"
            viewBox="0 0 45 30"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0 30H45V25H0V30ZM0 17.5H45V12.5H0V17.5ZM0 0V5H45V0H0Z"
              fill="#636363"
            />
          </svg>
        </a>
      </div>
      <div class="navbar-center">Lapas nosaukums</div>
      <div class="navbar-right">
        <div class="nav-title">HTML tests</div>
        <div class="nav-counter">
          <span class="span-name">Jautājums</span>
          <span id="counter" class="span-number">4/30</span>
        </div>
        <div class="nav-time">
          <span class="span-name">Laiks</span>
          <span id="time" class="span-number">27:59</span>
        </div>
      </div>
    </div>
    <div id="collapse1" class="navbar-dropdown hidden">
      <ul class="nav-group">
        <li><a href="#" class="nav-link">Links 1</a></li>
        <li><a href="#" class="nav-link">Links 2</a></li>
        <li><a href="#" class="nav-link">Links 3</a></li>
        <li><a href="#" class="nav-link">Links 4</a></li>
      </ul>
    </div>
  </nav>
</header>
<!-- Naura kods -->
<div class="container">
  <div class="left-side-main">
    <div class="question-image">
      <form>
        <input type="text" placeholder="Name" />
        <button type="submit">Iesniegt</button>
      </form>
    </div>
    <div class="question-part">
      <h1>Kādu tagu izmantosiet, lai izveidotu attēlā redzamo elementu?</h1>
    </div>
  </div>
  <div class="right-side-main">
    <div class="for-fun">
      <form class="for-fun">
        <div class="answer-inner-div-first">
          <div>
            <input
              id="answer-1"
              type="radio"
              name="answer"
              value="answer"
            />
            <label for="answer-1">Atbilžu variants</label>
          </div>
          <div>
            <input
              id="answer-1"
              type="radio"
              name="answer"
              value="answer"
            />
            <label for="answer-2">Atbilžu variants</label>
          </div>
          <div>
            <input
              id="answer-3"
              type="radio"
              name="answer"
              value="answer"
            />
            <label for="answer-3">Atbilžu variants</label>
          </div>
        </div>
        <div class="answer-inner-div-second">
          <button class="submit-button" type="submit">
            Iesniegt Atbildi
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="script.js"></script>
