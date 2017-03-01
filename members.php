<?php
    include 'sHeader.php'
?>
           <style>
            #view-source {
              position: fixed;
              display: block;
              right: 0;
              bottom: 0;
              margin-right: 40px;
              margin-bottom: 40px;
              z-index: 900;
            }
            .mdl-demo .mdl-card {
              height: auto;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column;
            }
            .mdl-demo .mdl-card > * {
              height: auto;
            }
            .mdl-demo .mdl-card .mdl-card__supporting-text {
              margin: 40px;
              -webkit-flex-grow: 1;
                  -ms-flex-positive: 1;
                      flex-grow: 1;
              padding: 0;
              color: inherit;
              width: calc(100% - 80px);
            }
            .mdl-demo.mdl-demo .mdl-card__supporting-text h4 {
              margin-top: 0;
              margin-bottom: 20px;
            }
            .mdl-demo .mdl-card__actions {
              margin: 0;
              padding: 4px 40px;
              color: inherit;
            }
            .mdl-demo .mdl-card__actions a {
              color: #00BCD4;
              margin: 0;
            }
            .mdl-demo .mdl-card__actions a:hover,
            .mdl-demo .mdl-card__actions a:active {
              color: inherit;
              background-color: transparent;
            }
            .mdl-demo .mdl-card__supporting-text + .mdl-card__actions {
              border-top: 1px solid rgba(0, 0, 0, 0.12);
            }
            .mdl-demo #add {
              position: absolute;
              right: 40px;
              top: 36px;
              z-index: 999;
            }
            
            .mdl-demo .mdl-layout__content section:not(:last-of-type) {
              position: relative;
              margin-bottom: 48px;
            }
            .mdl-demo section.section--center {
              max-width: 860px;
            }
            .mdl-demo #features section.section--center {
              max-width: 620px;
            }
            .mdl-demo section > header{
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-align-items: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-justify-content: center;
                  -ms-flex-pack: center;
                      justify-content: center;
            }
            .mdl-demo section > .section__play-btn {
              min-height: 200px;
            }
            .mdl-demo section > header > .material-icons {
              font-size: 3rem;
            }
            .mdl-demo section > button {
              position: absolute;
              z-index: 99;
              top: 8px;
              right: 8px;
            }
            .mdl-demo section .section__circle {
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-align-items: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-justify-content: flex-start;
                  -ms-flex-pack: start;
                      justify-content: flex-start;
              -webkit-flex-grow: 0;
                  -ms-flex-positive: 0;
                      flex-grow: 0;
              -webkit-flex-shrink: 1;
                  -ms-flex-negative: 1;
                      flex-shrink: 1;
            }
            .mdl-demo section .section__text {
              -webkit-flex-grow: 1;
                  -ms-flex-positive: 1;
                      flex-grow: 1;
              -webkit-flex-shrink: 0;
                  -ms-flex-negative: 0;
                      flex-shrink: 0;
              padding-top: 8px;
            }
            .mdl-demo section .section__text h5 {
              font-size: inherit;
              margin: 0;
              margin-bottom: 0.5em;
            }
            .mdl-demo section .section__text a {
              text-decoration: none;
            }
            .mdl-demo section .section__circle-container > .section__circle-container__circle {
              width: 64px;
              height: 64px;
              border-radius: 32px;
              margin: 8px 0;
            }
            .mdl-demo section.section--center .section__text:not(:last-child) {
              border-bottom: 1px solid rgba(0,0,0,.13);
            }
            .mdl-demo .mdl-card .mdl-card__supporting-text > h3:first-child {
              margin-bottom: 24px;
            }
            .mdl-demo .mdl-layout__tab-panel:not(#overview) {
              background-color: white;
            }
            .mdl-demo #features section {
              margin-bottom: 72px;
            }
            .mdl-demo #features h4, #features h5 {
              margin-bottom: 16px;
            }
            .mdl-demo .toc {
              border-left: 4px solid #C1EEF4;
              margin: 24px;
              padding: 0;
              padding-left: 8px;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column;
            }
            .mdl-demo .toc h4 {
              font-size: 0.9rem;
              margin-top: 0;
            }
            .mdl-demo .toc a {
              color: #4DD0E1;
              text-decoration: none;
              font-size: 16px;
              line-height: 28px;
              display: block;
            }
            .mdl-demo .mdl-menu__container {
              z-index: 99;
            }
        </style>
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin-top:5vh">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <img src="/images/peace.png"></img>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Vanadium</h4>
                Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                Commodo nisi non consectetur voluptate incididunt mollit duis dolore amet amet tempor exercitation. Qui amet aute ea aute id ad aliquip proident. Irure duis qui labore deserunt enim in quis nisi sint consequat aliqua. Ex proident labore et laborum tempor
                fugiat sint magna veniam minim. Nulla dolor labore adipisicing in enim mollit laboris fugiat eu. Aliquip minim cillum ullamco voluptate non dolore non ex duis fugiat duis ad. Deserunt cillum ad et nisi amet non voluptate culpa qui do.
                Labore ullamco et minim proident est laborum mollit ad labore deserunt ut irure dolore. Reprehenderit ad ad irure ut irure qui est eu velit eu excepteur adipisicing culpa. Laborum cupidatat ullamco eu duis anim reprehenderit proident aute
                ad consectetur eiusmod.
                <br>
                <br>
                Tempor tempor aliqua in commodo cillum Lorem magna dolore proident Lorem. Esse ad consequat est excepteur irure eu irure quis aliqua qui. Do mollit esse veniam excepteur ut veniam anim minim dolore sit commodo consequat duis commodo. Sunt dolor reprehenderit
                ipsum minim eiusmod eu consectetur anim excepteur eiusmod. Duis excepteur anim dolor sit enim veniam deserunt anim adipisicing Lorem elit. Cillum sunt do consequat elit laboris nisi consectetur.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Read our features</a>
              </div>
            </div>
          </section>
          
          
          <?php include 'sFooter.html' ?>