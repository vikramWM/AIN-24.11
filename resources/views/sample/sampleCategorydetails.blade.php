@extends('frontend-layouts.app')

@section('content')

<style>
  /* Container Styling */
  .head-container {
    width: 100%;
    background: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);
    padding: 20px;
    text-align: center;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
    border-radius: 10px;
  }

  .header-content {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    position: relative;
    flex-wrap: wrap;
  }

  h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    flex-grow: 1;
    color: gray;
  }

  .header-content img {
    margin-top: 5px;
    position: absolute;
    right: 10px;
  }

  .button {
    display: inline-block;
    background-color: #FFC107;
    color: #333;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    margin-top: 15px;
    transition: background-color 0.3s;
  }

  .button:hover {
    background-color: #e6a806;
  }

  .icon-section {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 20px;
  }

  .icon-item {
    text-align: center;
    max-width: 150px;
    margin: 10px;
    color: black;
  }

  .icon-item img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
  }

  /* Responsive Styling */
  @media (max-width: 768px) {
    .header-content {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    h1 {
      font-size: 20px;
    }

    .header-content img {
      position: static;
      margin-top: 10px;
    }

    .icon-section {
      justify-content: center;
    }
  }

  @media (max-width: 480px) {
    h1 {
      font-size: 18px;
    }

    .button {
      padding: 8px 16px;
      font-size: 14px;
    }

    .icon-item {
      max-width: 120px;
      margin: 5px;
    }

    .icon-item img {
      width: 40px;
      height: 40px;
    }
  }

  .container {
    padding: 20px;
    box-sizing: border-box;
    width: 100vw;
  }

  .breadcrumb {
    font-size: 14px;
    color: #333;
    margin-bottom: 15px;
  }

  .main-aside-container {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .main-content {
    flex: 2;
    min-width: 300px;
  }

  .filters {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .filters select {
    padding: 8px;
    margin-right: 10px;
  }

  .search-bar {
    display: flex;
    align-items: center;
  }

  .search-bar input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
  }

  .search-bar button {
    padding: 8px;
    border: 1px solid #ccc;
    background-color: #f0f0f0;
    cursor: pointer;
    border-radius: 0 4px 4px 0;
  }

  .sample-card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  }

  .sample-card h2 {
    font-size: 20px;
    margin-bottom: 10px;
  }

  .sample-info {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
  }

  .sample-info .pages {
    background-color: #4caf50;
    color: #fff;
    padding: 2px 8px;
    border-radius: 4px;
    margin-left: 10px;
  }

  .download-link {
    color: #ff6600;
    font-weight: bold;
    text-decoration: none;
  }

  <style>

  /* General Banner Styling */
  .banner {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    font-family: Arial, sans-serif;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .banner img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
  }

  .banner p {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0;
    color: #333;
  }

  .order-button {
    display: block;
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    margin: 10px auto;
    transition: background-color 0.3s;
  }



  /* Expert Section */
  .banner h3 {
    font-size: 25px;
    color: #444;
    margin: 2px 0 2px;
    border-bottom: 2px solid #007BFF;
    padding-bottom: 2px;
    text-align: center;
  }

  .writers {
    margin: 5px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

  }

  .expert-profile {
    display: flex;
    align-items: center;
    /* margin: 15px 0; */
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
  }


  .expert-profile img {
    border-radius: 50%;
    margin-right: 15px;
    width: 100px;
    /* Reduce image size */
    height: 100px
  }

  .expert-details {
    flex: 1;
  }

  .expert-details h4 {
    font-size: 16px;
    margin: 0;
    color: #333;
  }

  .expert-details .rating {
    font-size: 25px;
    color: #ff9900;
    margin: 5px 0;
  }

  .expert-details p {
    font-size: 14px;
    margin: 5px 0;
    color: #666;
  }

  .hire-button {
    background-color: #28a745;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .hire-button:hover {
    background-color: #218838;
  }

  /* Sidebar Offer Section */
  .sidebar-offer {
    margin-top: 20px;
    padding: 15px;
    border: 1px dashed #007BFF;
    border-radius: 5px;
    text-align: center;
    background: #e7f3ff;
  }

  .sidebar-offer .offer-text {
    font-size: 18px;
    font-weight: bold;
    color: #007BFF;
    margin-bottom: 10px;
  }

  .callback-button {
    background-color: #ffc107;
    color: #333;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .callback-button:hover {
    background-color: #e6a806;
  }


  /* Responsive Styling */
  @media (max-width: 768px) {
    .expert-profile {
      flex-direction: column;
      /* Stack profile items vertically */
      align-items: flex-start;
      text-align: left;
    }

    .expert-profile img {
      margin: 0 0 10px 0;
      /* Adjust spacing for stacked layout */
      align-self: center;
      /* Center align the image */
    }

    .expert-details {
      text-align: center;
      /* Center align details */
      width: 100%;
      /* Expand to full width */
    }

    .banner p {
      font-size: 14px;
      /* Reduce font size for smaller screens */
    }

    .order-button {
      padding: 8px 15px;
      /* Adjust button size */
      font-size: 14px;
      /* Reduce font size */
    }

    .sidebar-offer .offer-text {
      font-size: 16px;
      /* Adjust font size */
    }

    .callback-button {
      padding: 8px 15px;
      /* Adjust button size */
      font-size: 14px;
    }

    .expert-details p {
      font-size: 13px;
      /* Adjust font size */
    }
  }

  @media (max-width: 480px) {
    .banner {
      padding: 15px;
      /* Adjust container padding */
    }

    .expert-profile {
      padding: 10px;
    }

    .expert-profile img {
      width: 40px;
      /* Reduce image size */
      height: 40px;
    }

    .order-button,
    .callback-button {
      font-size: 12px;
      padding: 5px 10px;
      /* Further reduce button size */
    }

    .expert-details h4 {
      font-size: 14px;
      /* Reduce heading size */
    }

    .expert-details .rating,
    .expert-details p {
      font-size: 12px;
      /* Reduce text size */
    }
  }
</style>




<section class="banner-section-three header-section ">
  <div class="auto-container" style="margin-top: 110px;">

  </div>
</section>
<div class="head-container">
  <div class="header-content">  
    <h1 style="color:black;" >Free {{$categoryName}} Assignment Samples</h1>
    <img src="assets\media\avatars\assignment_logo.png" width="100" height="100" alt="pen" style="mix-blend-mode: multiply;">
  </div>

  <!-- <p>Explore our list of free samples of Accounting assignments to get academic writing help. We have curated a vast library of examples of Accounting assignments for free to help students with writing tasks. So, if you want to seek Accounting assignment help, our experts are here for you.</p> -->
  <a href="#" class="button">Get 100% Original Assignments</a>

  <div class="icon-section">
    <div class="icon-item">
      <img src="images2/100-percent.jpg" alt="100% Original Document" style="mix-blend-mode: multiply;">
      <p>100% Original </p>
    </div>
    <div class="icon-item">
      <img src="images2/contract.jpg" alt="Free Paper" style="mix-blend-mode: multiply;">
      <p>AI Free Content</p>
    </div>
    <div class="icon-item">
      <img src="images2/CV.jpg" alt="Free Paper" style="mix-blend-mode: multiply;">
      <p>Free CV on Every Order</p>
    </div>
    <div class="icon-item">
      <img src="images2/24-7.jpg" alt="Free Paper" style="mix-blend-mode: multiply;">
      <p>24*7 Available</p>
    </div>
    <div class="icon-item">
      <img src="images2/best-employee.jpg" alt="Experienced Writers" style="mix-blend-mode: multiply;">
      <p>Experienced Writers</p>
    </div>
    <div class="icon-item">
      <img src="images2/research-paper.jpg" alt="Plagiarism Report" style="mix-blend-mode: multiply;">
      <p>Plagiarism Report</p>
    </div>
  </div>
</div>


<section class="container">

  <!-- Main Content and Aside Banner Section -->
  <div class="main-aside-container">
    <!-- Main Content -->
    <div class="main-content">
      <!-- Filters -->
      <div class="filters">
        <select>
          <option>Choose the Academic Paper Type</option>
          <option>Case Study</option>
          <option>Research Paper</option>
          <option>Essay</option>
        </select>
        <div class="search-bar">
          <input type="text" placeholder="Enter a keyword">
          <button>🔍</button>
        </div>
      </div>
      @foreach ($sample as $obj)
      <div class="sample-card mb-4">
          <h2 style="font-weight:600; font-size: 20px;; color:black" >{{ $obj->title }}</h2>
          <div class="sample-info">
              <span>Downloads: {{ $obj->downloads }}</span> | 
          
              <span>Words: {{ str_word_count(strip_tags($obj->content)) }}</span> |
              @php
                  $pageCount = ceil(str_word_count(strip_tags($obj->content)) / 250);
              @endphp
              <span class="pages">Pages: {{ $pageCount }}</span>

          </div>
          <p>
              {!! Str::limit($obj->content, 200, '...') !!}
          </p>
          <a href="free-samples/{{$categoryName}}/{{$obj->slug}}" class="download-link">View or Download →</a>
      </div>
      @endforeach






    </div>

    <!-- Aside Banner Section -->
    <aside class="banner">
      <img src="/images/order-strip-mobile-GAH.svg?v=6" alt="Seasonal Offer" />
      <p>UPTO 40% OFF<br>Save your grades & pockets too!</p>
      <a href="#" class="order-button">Order Now</a>

      <div class=writers>
        <h3>4500+ Experts Writer</h3>
        <p>For Top Accounting Assignment Help</p>

        <div class="expert-profile">
          <img src="https://via.placeholder.com/50" alt="Michelle Stewart">
          <div class="expert-details">
            <h4>Michelle Stewart</h4>
            <div class="rating">★★★★★</div>
            <p>874 - Completed Orders</p>
            <button class="hire-button">Hire Now</button>
          </div>
        </div>

        <div class="expert-profile">
          <img src="https://via.placeholder.com/50" alt="Dr. Peter Bryce">
          <div class="expert-details">
            <h4>Dr. Peter Bryce</h4>
            <div class="rating">★★★★★</div>
            <p>756 - Completed Orders</p>
            <button class="hire-button">Hire Now</button>
          </div>
        </div>

        <div class="expert-profile">
          <img src="https://via.placeholder.com/50" alt="Evanka Wright">
          <div class="expert-details">
            <h4>Evanka Wright</h4>
            <div class="rating">★★★★★</div>
            <p>1033 - Completed Orders</p>
            <button class="hire-button">Hire Now</button>
          </div>
        </div>

        <div class="sidebar-offer">
          <div class="offer-text">Free CV On Every Order</div>
          <div class="callback-section">
            <button class="callback-button">Call Back</button>
          </div>


        </div>
      </div>

    </aside>

  </div>
</section>

@endsection