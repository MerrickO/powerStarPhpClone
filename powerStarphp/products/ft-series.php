<!DOCTYPE html>
<%- include('../partials/header') %>

  <body>
    <%- include('../partials/notification') %>
      <%- include('../partials/nav') %>
        <header class="text-center ">
          <h1 class="display-3 theme-bg theme-header-space"><b>FT SERIES</b></h1>
        </header>
        <div class="container">
          <div class="pt-5 pb-5">
            <%- include('../partials/products/ft-series-slide.ejs') %>
          </div>
          <h6>The All New FT Series Trucks</h6>
          <p>
            Are you in the market for a no-nonsense workhorse? Manufactured by the world’s leading commercial
            vehicle suppliers, Beiben. Ever Star Industries medium range FT series is a tough truck to follow.
          </p>

          <div class="text-center img-fluid">
            <h2>FT Range</h2>
            <p>Light and Medium Trucks</p>
            <div class="row pb-5">
              <div class="col-xl-4 p-3">
                <h4>Model: FT3</h4>
                <a href="/products/ft-series/ft3">
                  <img class="img-fluid" src="/imgs/products/ft3/screen-shot-2018-05-16-at-10-07-39--1-.png" width="500"
                    alt="">
                </a>
              </div>
              <div class="col-xl-4 p-3">
                <h4>Model: FT5</h4>
                <a href="/products/ft-series/ft5">
                  <img class="img-fluid" src="/imgs/products/ft3/screen-shot-2018-05-16-at-10-07-39--1-.png" width="500"
                    alt="">
                </a>
              </div>
              <div class="col-xl-4 p-3">
                <h4>Model: FT 8</h4>
                <a href="/products/ft-series/ft8">
                  <img class="img-fluid" src="/imgs/products/ft8/ft8-main.jpg" width="500" alt="">
                </a>
              </div>

            </div>
          </div>
        </div>
        <%- include('../partials/footer') %>
  </body>

  </html>