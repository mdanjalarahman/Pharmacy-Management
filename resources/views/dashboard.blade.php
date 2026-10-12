<!DOCTYPE html>
<html lang="en">

<head>Akij Wellness


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Akij Wellness | Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, Arial, sans-serif;
            background: #f4f8f7;
            color: #173b3d;
        }

        a {
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        /* =========================
           LAYOUT
        ========================== */

        .app {
            display: flex;
            min-height: 100vh;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 245px;
            min-height: 100vh;
            background: #063f43;
            color: white;
            padding: 25px 15px;
            transition: 0.3s ease;
            flex-shrink: 0;
        }

        .sidebar.collapsed {
            width: 78px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 5px 10px 30px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: #20b486;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
            font-weight: 800;
            color: white;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 750;
            white-space: nowrap;
        }

        .menu-title {
            font-size: 10px;
            color: #8bb5b5;
            letter-spacing: 1px;
            margin: 20px 12px 9px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 13px;
            color: #b7d1d1;
            padding: 12px;
            border-radius: 11px;
            font-size: 14px;
            transition: 0.2s ease;
        }

        .menu-item svg {
            width: 19px;
            height: 19px;
            flex-shrink: 0;
        }

        .menu-item:hover {
            background: rgba(255,255,255,0.08);
            color: white;
        }

        .menu-item.active {
            background: #20b486;
            color: white;
        }

        .menu-text {
            white-space: nowrap;
        }

        .sidebar.collapsed .logo {
            justify-content: center;
            padding-left: 0;
            padding-right: 0;
        }

        .sidebar.collapsed .logo-text,
        .sidebar.collapsed .menu-title,
        .sidebar.collapsed .menu-text {
            display: none;
        }

        .sidebar.collapsed .menu-item {
            justify-content: center;
        }

        .logout-area {
            margin-top: 35px;
        }

        /* =========================
           MAIN
        ========================== */

        .main {
            flex: 1;
            min-width: 0;
        }

        /* =========================
           TOPBAR
        ========================== */

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e4eeee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .top-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .toggle {
            width: 40px;
            height: 40px;
            border: 0;
            border-radius: 10px;
            background: #f1f7f6;
            color: #063f43;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle:hover {
            background: #e4f1ef;
        }

        .search {
            width: 330px;
            height: 40px;
            background: #f5f8f8;
            border: 1px solid #e6eeee;
            border-radius: 12px;
            display: flex;
            align-items: center;
            padding: 0 13px;
            gap: 9px;
        }

        .search svg {
            width: 17px;
            color: #849999;
        }

        .search input {
            border: 0;
            outline: 0;
            background: transparent;
            width: 100%;
            font-size: 13px;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .notification {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #e4eeee;
            background: white;
            color: #557475;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .notification svg {
            width: 19px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #d7f5e9;
            color: #087052;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 750;
        }

        .profile-name {
            font-size: 13px;
            font-weight: 700;
        }

        .profile-role {
            font-size: 11px;
            color: #8aa0a0;
            margin-top: 3px;
            text-transform: capitalize;
        }

        /* =========================
           CONTENT
        ========================== */

        .content {
            padding: 30px;
        }

        .welcome {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin: 0;
            font-size: 27px;
            color: #063f43;
        }

        .welcome p {
            margin: 7px 0 0;
            color: #789090;
            font-size: 13px;
        }

        .today {
            background: white;
            border: 1px solid #e6eeee;
            padding: 10px 15px;
            border-radius: 10px;
            font-size: 12px;
            color: #557475;
        }

        /* =========================
           STATISTICS
        ========================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 18px;
        }

        .stat {
            background: white;
            border: 1px solid #e6eeee;
            border-radius: 17px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0,60,60,.035);
        }

        .stat-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-title {
            color: #7d9292;
            font-size: 12px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-icon svg {
            width: 19px;
        }

        .green {
            background: #dcf7eb;
            color: #0c9561;
        }

        .blue {
            background: #e1effc;
            color: #4383b2;
        }

        .purple {
            background: #eee7fb;
            color: #7755a5;
        }

        .orange {
            background: #fff0db;
            color: #bd7a24;
        }

        .stat-number {
            font-size: 25px;
            font-weight: 750;
            color: #073f43;
            margin-top: 13px;
        }

        .stat-footer {
            display: flex;
            align-items: center;
            gap: 7px;
            margin-top: 8px;
        }

        .up {
            color: #12935d;
            font-size: 11px;
            font-weight: 700;
        }

        .small-text {
            color: #9aabab;
            font-size: 10px;
        }

        /* =========================
           GRID
        ========================== */

        .grid {
            display: grid;
            grid-template-columns: 1.55fr 1fr;
            gap: 18px;
            margin-bottom: 18px;
        }

        .card {
            background: white;
            border: 1px solid #e6eeee;
            border-radius: 18px;
            padding: 21px;
            box-shadow: 0 5px 20px rgba(0,60,60,.035);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 720;
            color: #073f43;
        }

        .card-subtitle {
            margin-top: 5px;
            font-size: 11px;
            color: #8ca0a0;
        }

        .more {
            border: 0;
            background: #f2f7f6;
            color: #557475;
            width: 31px;
            height: 31px;
            border-radius: 9px;
            cursor: pointer;
        }

        /* =========================
           CHART
        ========================== */

        .chart {
            height: 245px;
            position: relative;
        }

        .chart-lines {
            position: absolute;
            left: 42px;
            right: 0;
            top: 5px;
            bottom: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .line {
            border-top: 1px dashed #dbe7e5;
        }

        .chart-labels {
            position: absolute;
            left: 0;
            top: 0;
            bottom: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-size: 9px;
            color: #9aacac;
        }

        .chart svg {
            position: absolute;
            left: 42px;
            right: 0;
            top: 5px;
            width: calc(100% - 42px);
            height: 205px;
        }

        .days {
            position: absolute;
            left: 42px;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: space-between;
            font-size: 10px;
            color: #8ca0a0;
        }

        /* =========================
           LOW STOCK
        ========================== */

        .medicine {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 11px 0;
            border-bottom: 1px solid #edf2f2;
        }

        .medicine:last-child {
            border-bottom: 0;
        }

        .medicine-icon {
            width: 39px;
            height: 39px;
            background: #e3f7ef;
            color: #12935d;
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .medicine-icon svg {
            width: 18px;
        }

        .medicine-info {
            flex: 1;
        }

        .medicine-name {
            font-size: 12px;
            font-weight: 650;
            color: #285557;
        }

        .medicine-quantity {
            margin-top: 4px;
            font-size: 10px;
            color: #91a3a3;
        }

        .badge {
            padding: 5px 8px;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 700;
        }

        .low {
            background: #fff0ee;
            color: #d35449;
        }

        .warning {
            background: #fff5df;
            color: #b17a27;
        }

        .view {
            display: block;
            text-align: center;
            margin-top: 12px;
            padding: 9px;
            background: #eef8f6;
            border-radius: 9px;
            color: #12836f;
            font-size: 11px;
            font-weight: 650;
        }

        /* =========================
           SALES TABLE
        ========================== */

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th {
            text-align: left;
            padding: 10px;
            font-size: 10px;
            color: #8ca0a0;
            border-bottom: 1px solid #e7eeee;
        }

        td {
            padding: 13px 10px;
            font-size: 11px;
            color: #496d6e;
            border-bottom: 1px solid #edf2f2;
        }

        tr:last-child td {
            border-bottom: 0;
        }

        .invoice {
            font-weight: 700;
            color: #073f43;
        }

        .status {
            display: inline-block;
            padding: 5px 8px;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 700;
        }

        .completed {
            background: #ddf7ea;
            color: #148856;
        }

        .pending {
            background: #fff2dc;
            color: #b07825;
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media(max-width:1100px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:800px) {

            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                z-index: 1000;
                transform: translateX(-100%);
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }

            .topbar {
                padding: 0 18px;
            }

            .content {
                padding: 20px 18px;
            }

            .search {
                width: 230px;
            }

            .profile-name,
            .profile-role {
                display: none;
            }
        }

        @media(max-width:600px) {

            .stats {
                grid-template-columns: 1fr;
            }

            .search {
                display: none;
            }

            .welcome {
                align-items: flex-start;
            }

            .today {
                display: none;
            }

            .welcome h1 {
                font-size: 23px;
            }
        }
    </style>
</head>


<body>

<div class="app">

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside id="sidebar" class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                𝑨𝑾
            </div>

            <div class="logo-text">
                Akij Wellness
            </div>

        </div>


        <div class="menu-title">
            MAIN MENU
        </div>

        <nav class="menu">

            <a href="{{ route('dashboard') }}"
               class="menu-item active">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 10.5L12 3l9 7.5M5 9.5V21h14V9.5" />

                </svg>

                <span class="menu-text">
                    Dashboard
                </span>

            </a>


            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5M12 13.5L4.5 8.25m7.5 5.25l7.5-5.25" />

                </svg>

                <span class="menu-text">
                    Medicines
                </span>

            </a>


            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 7l-8-4-8 4m16 0v10l-8 4m8-14l-8 4m0 0L4 7m8 4v10" />

                </svg>

                <span class="menu-text">
                    Inventory
                </span>

            </a>

        </nav>


        <div class="menu-title">
            SALES
        </div>

        <nav class="menu">

            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 3h2l.5 2M7 13h10l4-8H5.5M7 13L5.5 5M7 13l-2 4h12m-9 4a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />

                </svg>

                <span class="menu-text">
                    Sales
                </span>

            </a>


            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm11 10v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />

                </svg>

                <span class="menu-text">
                    Customers
                </span>

            </a>

        </nav>


        <div class="menu-title">
            MANAGEMENT
        </div>

        <nav class="menu">

            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 19V5m0 14h16M8 16v-4m4 4V8m4 8v-6" />

                </svg>

                <span class="menu-text">
                    Reports
                </span>

            </a>


            @if(auth()->user()->role === 'owner')

                <a href="#"
                   class="menu-item">

                    <svg fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm7-3a3 3 0 100-6 3 3 0 000 6z" />

                    </svg>

                    <span class="menu-text">
                        Employees
                    </span>

                </a>

            @endif


            <a href="#"
               class="menu-item">

                <svg fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7zM19 12a7 7 0 01-1 3.5M5 12a7 7 0 011-3.5" />

                </svg>

                <span class="menu-text">
                    Settings
                </span>

            </a>

        </nav>


        <div class="logout-area">

            <form method="POST"
                  action="{{ route('logout') }}">

                @csrf

                <button type="submit"
                        class="menu-item"
                        style="border:0;background:transparent;width:100%;cursor:pointer;text-align:left;">

                    <svg fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1" />

                    </svg>

                    <span class="menu-text">
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </aside>


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <section class="main">

        <!-- TOPBAR -->

        <header class="topbar">

            <div class="top-left">

                <button id="toggle"
                        class="toggle"
                        type="button">

                    <svg width="20"
                         height="20"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />

                    </svg>

                </button>


                <div class="search">

                    <svg fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M21 21l-4.35-4.35m2.35-5.65a8 8 0 11-16 0 8 8 0 0116 0z" />

                    </svg>

                    <input type="text"
                           placeholder="Search medicines, customers...">

                </div>

            </div>


            <div class="top-right">

                <div class="notification">

                    <svg fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 00-12 0v3.2c0 .5-.2 1-.6 1.4L4 17h5m6 0v1a3 3 0 01-6 0v-1" />

                    </svg>

                </div>


                <div class="profile">

                    <div class="avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div>

                        <div class="profile-name">
                            {{ auth()->user()->name }}
                        </div>

                        <div class="profile-role">
                            {{ auth()->user()->role }}
                        </div>

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <main class="content">

            <!-- WELCOME -->

            <div class="welcome">

                <div>

                    <h1>
                        Good day, {{ auth()->user()->name }} 👋
                    </h1>

                    <p>
                        Here's what's happening in your pharmacy today.
                    </p>

                </div>

                <div class="today">
                    Akij Wellness Management
                </div>

            </div>


            <!-- STATISTICS -->

            <div class="stats">

                <!-- MEDICINES -->

                <div class="stat">

                    <div class="stat-head">

                        <div class="stat-title">
                            Total Medicines
                        </div>

                        <div class="stat-icon green">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5" />

                            </svg>

                        </div>

                    </div>

                    <div class="stat-number">
                        1,248
                    </div>

                    <div class="stat-footer">

                        <span class="up">
                            ↑ 8.2%
                        </span>

                        <span class="small-text">
                            this month
                        </span>

                    </div>

                </div>


                <!-- SALES -->

                <div class="stat">

                    <div class="stat-head">

                        <div class="stat-title">
                            Today's Sales
                        </div>

                        <div class="stat-icon blue">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M3 3h2l.5 2M7 13h10l4-8H5.5M7 13L5.5 5M7 13l-2 4h12" />

                            </svg>

                        </div>

                    </div>

                    <div class="stat-number">
                        0000
                    </div>

                    <div class="stat-footer">

                        <span class="up">
                            3.2%
                        </span>

                        <span class="small-text">
                            today
                        </span>

                    </div>

                </div>


                <!-- CUSTOMERS -->

                <div class="stat">

                    <div class="stat-head">

                        <div class="stat-title">
                            Customers
                        </div>

                        <div class="stat-icon purple">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8" />

                            </svg>

                        </div>

                    </div>

                    <div class="stat-number">
                        03
                    </div>

                    <div class="stat-footer">

                        <span class="up">
                            ↑ 5.4%
                        </span>

                        <span class="small-text">
                            this month
                        </span>

                    </div>

                </div>


                <!-- LOW STOCK -->

                <div class="stat">

                    <div class="stat-head">

                        <div class="stat-title">
                            Low Stock
                        </div>

                        <div class="stat-icon orange">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 9v4m0 4h.01M10.3 3.3L2.7 17a2 2 0 001.75 3h15.1a2 2 0 001.75-3L13.7 3.3a2 2 0 00-3.4 0z" />

                            </svg>

                        </div>

                    </div>

                    <div class="stat-number">
                        12
                    </div>

                    <div class="stat-footer">

                        <span style="color:#d35449;font-size:11px;font-weight:700;">
                            Attention needed
                        </span>

                    </div>

                </div>

            </div>


            <!-- CHART + LOW STOCK -->

            <div class="grid">

                <!-- SALES CHART -->

                <div class="card">

                    <div class="card-header">

                        <div>

                            <div class="card-title">
                                Sales Overview
                            </div>

                            <div class="card-subtitle">
                                Weekly sales performance
                            </div>

                        </div>

                        <button class="more">
                            •••
                        </button>

                    </div>


                    <div class="chart">

                        <div class="chart-labels">
                            <span>30K</span>
                            <span>20K</span>
                            <span>10K</span>
                            <span>0</span>
                        </div>


                        <div class="chart-lines">

                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>

                        </div>


                        <svg viewBox="0 0 600 205"
                             preserveAspectRatio="none">

                            <defs>

                                <linearGradient id="salesFill"
                                                x1="0"
                                                y1="0"
                                                x2="0"
                                                y2="1">

                                    <stop offset="0%"
                                          stop-color="#20b486"
                                          stop-opacity=".22"/>

                                    <stop offset="100%"
                                          stop-color="#20b486"
                                          stop-opacity="0"/>

                                </linearGradient>

                            </defs>


                            <path
                                d="M0 170
                                   C40 160 55 125 90 140
                                   S135 165 170 105
                                   S215 125 250 90
                                   S290 65 325 85
                                   S365 35 395 55
                                   S430 125 465 105
                                   S505 145 535 115
                                   S570 95 600 75
                                   L600 205
                                   L0 205 Z"
                                fill="url(#salesFill)"/>


                            <path
                                d="M0 170
                                   C40 160 55 125 90 140
                                   S135 165 170 105
                                   S215 125 250 90
                                   S290 65 325 85
                                   S365 35 395 55
                                   S430 125 465 105
                                   S505 145 535 115
                                   S570 95 600 75"
                                fill="none"
                                stroke="#20b486"
                                stroke-width="3"
                                stroke-linecap="round"/>


                            <circle
                                cx="395"
                                cy="55"
                                r="6"
                                fill="#20b486"
                                stroke="white"
                                stroke-width="3"/>

                        </svg>


                        <div class="days">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>

                    </div>

                </div>


                <!-- LOW STOCK -->

                <div class="card">

                    <div class="card-header">

                        <div>

                            <div class="card-title">
                                Low Stock Medicines
                            </div>

                            <div class="card-subtitle">
                                Medicines requiring attention
                            </div>

                        </div>

                        <button class="more">
                            •••
                        </button>

                    </div>


                    <div class="medicine">

                        <div class="medicine-icon">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5" />

                            </svg>

                        </div>

                        <div class="medicine-info">

                            <div class="medicine-name">
                                Paracetamol 500mg
                            </div>

                            <div class="medicine-quantity">
                                8 units remaining
                            </div>

                        </div>

                        <span class="badge low">
                            LOW
                        </span>

                    </div>


                    <div class="medicine">

                        <div class="medicine-icon">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5" />

                            </svg>

                        </div>

                        <div class="medicine-info">

                            <div class="medicine-name">
                                Napa Extra
                            </div>

                            <div class="medicine-quantity">
                                12 units remaining
                            </div>

                        </div>

                        <span class="badge warning">
                            WARNING
                        </span>

                    </div>


                    <div class="medicine">

                        <div class="medicine-icon">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5" />

                            </svg>

                        </div>

                        <div class="medicine-info">

                            <div class="medicine-name">
                                Seclo 20mg
                            </div>

                            <div class="medicine-quantity">
                                5 units remaining
                            </div>

                        </div>

                        <span class="badge low">
                            LOW
                        </span>

                    </div>


                    <div class="medicine">

                        <div class="medicine-icon">

                            <svg fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M19.5 8.25L12 3 4.5 8.25m15 0v7.5L12 21l-7.5-5.25v-7.5" />

                            </svg>

                        </div>

                        <div class="medicine-info">

                            <div class="medicine-name">
                                Omeprazole 20mg
                            </div>

                            <div class="medicine-quantity">
                                15 units remaining
                            </div>

                        </div>

                        <span class="badge warning">
                            WARNING
                        </span>

                    </div>


                    <a href="#" class="view">
                        View inventory →
                    </a>

                </div>

            </div>


            <!-- RECENT SALES -->

            <div class="card">

                <div class="card-header">

                    <div>

                        <div class="card-title">
                            Recent Sales
                        </div>

                        <div class="card-subtitle">
                            Latest pharmacy transactions
                        </div>

                    </div>

                    <button class="more">
                        •••
                    </button>

                </div>


                <div class="table-container">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    INVOICE
                                </th>

                                <th>
                                    CUSTOMER
                                </th>

                                <th>
                                    MEDICINES
                                </th>

                                <th>
                                    AMOUNT
                                </th>

                                <th>
                                    STATUS
                                </th>

                                <th>
                                    DATE
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td class="invoice">
                                    #INV-1001
                                </td>

                                <td>
                                    Rahim Ahmed
                                </td>

                                <td>
                                    3 medicines
                                </td>

                                <td>
                                    ৳850
                                </td>

                                <td>
                                    <span class="status completed">
                                        Completed
                                    </span>
                                </td>

                                <td>
                                    Today, 10:32 AM
                                </td>

                            </tr>


                            <tr>

                                <td class="invoice">
                                    #INV-1002
                                </td>

                                <td>
                                    Karim Hasan
                                </td>

                                <td>
                                    5 medicines
                                </td>

                                <td>
                                    ৳1,420
                                </td>

                                <td>
                                    <span class="status completed">
                                        Completed
                                    </span>
                                </td>

                                <td>
                                    Today, 09:45 AM
                                </td>

                            </tr>


                            <tr>

                                <td class="invoice">
                                    #INV-1003
                                </td>

                                <td>
                                    Nusrat Jahan
                                </td>

                                <td>
                                    2 medicines
                                </td>

                                <td>
                                    ৳650
                                </td>

                                <td>
                                    <span class="status pending">
                                        Pending
                                    </span>
                                </td>

                                <td>
                                    Yesterday
                                </td>

                            </tr>


                            <tr>

                                <td class="invoice">
                                    #INV-1004
                                </td>

                                <td>
                                    Arif Hossain
                                </td>

                                <td>
                                    7 medicines
                                </td>

                                <td>
                                    ৳2,150
                                </td>

                                <td>
                                    <span class="status completed">
                                        Completed
                                    </span>
                                </td>

                                <td>
                                    Yesterday
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

    </section>

</div>


<script>

    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggle');

    toggle.addEventListener('click', function () {

        if (window.innerWidth <= 800) {

            sidebar.classList.toggle('mobile-open');

        } else {

            sidebar.classList.toggle('collapsed');

        }

    });

</script>

</body>

</html>