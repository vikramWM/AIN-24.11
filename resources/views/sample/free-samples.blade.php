@extends('frontend-layouts.app')

@section('content')

<section class="banner-section-three header-section">
    <div class="auto-container" style="margin-top: 100px;">

    </div>
</section>
<div class="head-container mt-4">
    <div class="header-content">  
        <h1 style="color:black;">Free Accounting Assignment Samples</h1>
        <img src="assets\media\avatars\assignment_logo.png" width="100" height="100" alt="pen" style="mix-blend-mode: multiply;">
    </div>

    <!-- <p>Explore our list of free samples of Accounting assignments to get academic writing help. We have curated a vast library of examples of Accounting assignments for free to help students with writing tasks. So, if you want to seek Accounting assignment help, our experts are here for you.</p> -->
    <a href="#" class="button">Get 100% Original Assignments</a>

    <div class="icon-section">
        <div class="icon-item">  
            <img src="images2\100-percent.jpg" alt="100% Original Document" style="mix-blend-mode: multiply;">
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
<section class="instructor-section m-5">

    <div class="auto-container">
        <div class="row">
            
            @foreach ($categories as $letter => $group) <!-- Loop through each group -->
                 <a href="/free-samples"> 
                <div class="col-md-4 mb-3">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <div class="icon">{{ $letter }}</div> <!-- Display the letter -->
                        </div>
                        @foreach ($group as $category)
                     
                             <div class="subject-list">
                                <div class="subject-container">
                                    <h4 class="subject-header">
                                        <a  href="/free-samples/{{$category->name}}"  class="subject-name" aria-label="View details about {{ $category->name }}">
                                            {{ $category->name }}
                                        </a>
                                        <span class="subject-count">{{ $category->sample_count }}</span>
                                    </h4>
                                </div>
                            </div>
                            
                        @endforeach
                       
                    </div>
                </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

<style>
    body {
        font-family: 'Arial', sans-serif;
        font-size: 16px;
        color: #333;
    }

    .instructor-section .inner-box {
        display: flex;
        flex-direction: column;
        background-color: #f9f9f9;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        transition: transform 0.3s ease;
    }

    .icon-box {
        margin-bottom: 10px;
        background-color: #0a6b9d;
        padding: 11px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
    }

    .icon-box .icon {
        font-size: 24px;
        color: white;
        font-weight: bold;
    }

    .subject-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .subject-container {
        width: 100%;
        border: 1px solid #ddd;
        padding: 6px 10px;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        word-break: break-word;
    }

    .subject-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin: 0;
    }

    .subject-name {
        font-size: 20px;
        color: #000;
        text-decoration: none;
        font-weight: 500;
    }

    .subject-count {
        font-size: 15px;
        color: #000;
        font-weight: 500;
    }

    /* Hover effect */
    .instructor-section .inner-box:hover {
        transform: translateY(-3px);
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Vertical stacking for subject-row */
    .subject-row {
        display: flex;
        flex-direction: column;
        /* Stack items vertically */
        gap: 15px;
        /* Space between items */
    }

    .subject-row>div {
        flex: 0 0 100%;
        /* Full width */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .subject-row>div {
            margin-bottom: 15px;
        }
    }

    @media (max-width: 576px) {
        .subject-row {
            gap: 10px;
            /* Reduce spacing for smaller screens */
        }

        .icon-box {
            width: 30px;
            height: 30px;
            padding: 5px;
        }

        .icon-box .icon {
            font-size: 18px;
        }

        .subject-name {
            font-size: 16px;
        }

        .subject-count {
            font-size: 13px;
        }
    }
</style>
<style>
    /* Container Styling */
    .head-container {
        width: 100vw;
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
</style>
@endsection