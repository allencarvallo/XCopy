<!--
 Copyright 2016 Google Inc.
 
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 
      http://www.apache.org/licenses/LICENSE-2.0
 
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://weather-pwa-sample.firebaseapp.com/final/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather PWA</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/inline.css">

  <!-- TODO add manifest here -->
  
</head>
<body>

  <header class="header">
    <h1 class="header__title">Weather PWA</h1>
    <button id="butRefresh" class="headerButton" aria-label="Refresh"></button>
    <button id="butAdd" class="headerButton" aria-label="Add"></button>
  </header>

  <main class="main">
    <div class="card cardTemplate weather-forecast" hidden>
      <div class="city-key" hidden></div>
      <div class="card-last-updated" hidden></div>
      <div class="location"></div>
      <div class="date"></div>
      <div class="description"></div>
      <div class="current">
        <div class="visual">
          <div class="icon"></div>
          <div class="temperature">
            <span class="value"></span><span class="scale">°F</span>
          </div>
        </div>
        <div class="description">
          <div class="humidity"></div>
          <div class="wind">
            <span class="value"></span>
            <span class="scale">mph</span>
            <span class="direction"></span>°
          </div>
          <div class="sunrise"></div>
          <div class="sunset"></div>
        </div>
      </div>
      <div class="future">
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
        <div class="oneday">
          <div class="date"></div>
          <div class="icon"></div>
          <div class="temp-high">
            <span class="value"></span>°
          </div>
          <div class="temp-low">
            <span class="value"></span>°
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="dialog-container">
    <div class="dialog">
      <div class="dialog-title">Add new city</div>
      <div class="dialog-body">
        <select id="selectCityToAdd">
          <!-- Values map to Yahoo Weather API Where On Earth Identifiers (WOEIDs).
               https://developer.yahoo.com/weather/documentation.html#req -->
          <option value="2357536">Austin, TX</option>
          <option value="2367105">Boston, MA</option>
          <option value="2379574">Chicago, IL</option>
          <option value="2459115">New York, NY</option>
          <option value="2475687">Portland, OR</option>
          <option value="2487956">San Francisco, CA</option>
          <option value="2490383">Seattle, WA</option>
        </select>
      </div>
      <div class="dialog-buttons">
        <button id="butAddCity" class="button">Add</button>
        <button id="butAddCancel" class="button">Cancel</button>
      </div>
    </div>
  </div>

  <div class="loader">
    <svg viewBox="0 0 32 32" width="32" height="32">
      <circle id="spinner" cx="16" cy="16" r="14" fill="none"></circle>
    </svg>
  </div>

  <!-- Uncomment the line below when ready to test with fake data -->
  <script src="work/scripts/app.js" async></script>

</body>
</html>
