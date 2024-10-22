<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #eef1fc;
        }

        .search-container {
            display: flex;
            align-items: center;
            border: 2px solid white;
            border-radius: 30px;
            padding: 5px;
            background-color: white;
            margin: 0 auto 20px;
            /* Center the container */
            width: 600px;
            /* Adjust this width as needed */
        }

        .search-container:hover {
            border-color: blue;
        }

        .search-input {
            padding: 12px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            flex: 1;
            /* Allows the input to take the remaining space */
            outline: none;
            font-size: 16px;
        }

        .search-button {
            padding: 12px 25px;
            border: none;
            border-radius: 30px;
            background-color: #4b24d3;
            color: white;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #6b38f7;
        }

        .search-input::placeholder {
            color: #a9a9a9;
            font-size: 16px;
        }


        .filter-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }


        .filter-group {
            display: flex;
            /* Align filters in a row */
        }

        .filter {
            margin-right: 30px;
            /* Increased space between filters */
            margin-top: 20px;
        }

        .custom-dropdown {
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
            font-size: 16px;
            background-color: white;
            cursor: pointer;
            appearance: none;
            text-align: center;
            transition: border-color 0.3s;
        }

        .custom-dropdown:focus {
            border-color: #4b24d3;
        }

        .custom-dropdown:hover {
            border-color: #4b24d3;
        }

        .reset-button {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            background-color: #4b24d3;
            color: white;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .reset-button:hover {
            background-color: #6b38f7;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 25px;
            background-color: white;
            cursor: pointer;
            font-size: 16px;
            width: 150px;
        }

        .dropdown-content {
            display: none;
            /* Initially hidden */
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            z-index: 1;
            width: 100%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content.show {
            display: block;
            /* Show dropdown when toggled */
        }

        .dropdown-content label {
            display: block;
            padding: 5px 10px;
        }

        .dropdown-content input {
            margin-right: 5px;
        }

        #data-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            align-items: center;
            margin-bottom: 20px;
            /* Space below each item if needed */
        }

        .cover-pic {
            width: 250px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }


        .profile-container {
            display: flex;
            align-items: center;
            gap: 15px;
            /* Add spacing between the profile picture and the text */
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-info h3 {
            margin: 0;
        }

        .rating-location {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }

        .location {
            margin-left: 15px;
            /* Space between rating and location */
            font-size: 14px;
            color: gray;
        }


        .item h3 {
            margin: 0;
            font-size: 18px;
        }

        .item p {
            margin: 5px 0;
            color: gray;
            font-size: 14px;
        }

        .info-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center align children */
            padding: 10px;
            margin-top: 20px;
        }

        .price-section {
            display: flex;
            justify-content: center;
            width: 100%;
            /* Full width for centering */
        }

        .class-label {
            font-size: 20px;
            font-weight: bold;
        }

        .class-info {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px 0;
        }

        .left-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-right: 20px;
            /* Add space between left and right */
        }

        .right-info {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-left: 20px;
            /* Add space between left and right */
        }

        .class-type,
        .class-duration {
            border-radius: 5px;
            margin: 5px 0;
        }

        .hourly-rate {
            margin-top: 10px;
        }

        .price {
            font-size: 24px;
            color: #4b24d3;
            font-weight: bold;
            text-align: center;
            /* Center align hourly rate */
        }

        .filled {
            color: gold;
            /* Color for filled stars */
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <form action="{{ route('instructors.search') }}" method="GET">
            <div class="search-container">
                <input type="text" class="search-input" name="query" placeholder="Any topic or teacher">
                <button type="submit" class="search-button">Search</button>
            </div>
        </form>

        <div class="filter-container">
            <form id="filterForm" action="{{ route('instructors.filter') }}" method="GET">
                <div class="filter-group">
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-user"></i> Age</label>
                            <div class="dropdown-content">
                                <label><input type="checkbox" name="age[]" value="1-5" {{ in_array('1-5', request('age', [])) ? 'checked' : '' }}> 1-5</label>
                                <label><input type="checkbox" name="age[]" value="6-10" {{ in_array('6-10', request('age', [])) ? 'checked' : '' }}> 6-10</label>
                                <label><input type="checkbox" name="age[]" value="11-15" {{ in_array('11-15', request('age', [])) ? 'checked' : '' }}> 11-15</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-graduation-cap"></i> Grade</label>
                            <div class="dropdown-content">
                                @for ($i = 5; $i <= 14; $i++)
                                    <label><input type="checkbox" name="grade[]" value="{{ $i }}" {{ in_array($i, request('grade', [])) ? 'checked' : '' }}> {{ $i }}</label>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-book-open"></i> Subject</label>
                            <div class="dropdown-content">
                                <label><input type="checkbox" name="subject[]" value="Maths" {{ in_array('Maths', request('subject', [])) ? 'checked' : '' }}> Maths</label>
                                <label><input type="checkbox" name="subject[]" value="Science" {{ in_array('Science', request('subject', [])) ? 'checked' : '' }}> Science</label>
                                <label><input type="checkbox" name="subject[]" value="Art" {{ in_array('Art', request('subject', [])) ? 'checked' : '' }}> Art</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-dollar-sign"></i> Price</label>
                            <div class="dropdown-content">
                                <label><input type="checkbox" name="price[]" value="6-10" {{ in_array('6-10', request('price', [])) ? 'checked' : '' }}> $6-$10</label>
                                <label><input type="checkbox" name="price[]" value="11-15" {{ in_array('11-15', request('price', [])) ? 'checked' : '' }}> $11-$15</label>
                                <label><input type="checkbox" name="price[]" value="16-20" {{ in_array('16-20', request('price', [])) ? 'checked' : '' }}> $16-$20</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-book"></i> Curriculum</label>
                            <div class="dropdown-content">
                                <label><input type="checkbox" name="curriculum[]" value="OL" {{ in_array('OL', request('curriculum', [])) ? 'checked' : '' }}> OL</label>
                                <label><input type="checkbox" name="curriculum[]" value="AL" {{ in_array('AL', request('curriculum', [])) ? 'checked' : '' }}> AL</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <label class="dropbtn"><i class="fas fa-map-marker-alt"></i> Location</label>
                            <div class="dropdown-content">
                                <label><input type="checkbox" name="location[]" value="Colombo" {{ in_array('Colombo', request('location', [])) ? 'checked' : '' }}> Colombo</label>
                                <label><input type="checkbox" name="location[]" value="Kandy" {{ in_array('Kandy', request('location', [])) ? 'checked' : '' }}> Kandy</label>
                                <label><input type="checkbox" name="location[]" value="Galle" {{ in_array('Galle', request('location', [])) ? 'checked' : '' }}> Galle</label>
                                <label><input type="checkbox" name="location[]" value="Negombo" {{ in_array('Negombo', request('location', [])) ? 'checked' : '' }}> Negombo</label>
                                <label><input type="checkbox" name="location[]" value="Kurunegala" {{ in_array('Kurunegala', request('location', [])) ? 'checked' : '' }}>
                                    Kurunegala</label>
                                <label><input type="checkbox" name="location[]" value="Jaffna" {{ in_array('Jaffna', request('location', [])) ? 'checked' : '' }}> Jaffna</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter">
                        <div class="dropdown">
                            <button type="button" class="reset-button" onclick="resetFilters()">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <script>
            // Function to submit form when a checkbox is checked or unchecked
            document.querySelectorAll('#filterForm input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    document.getElementById('filterForm').submit();
                });
            });

            // Function to reset filters
            function resetFilters() {
                document.getElementById('filterForm').reset();
                document.getElementById('filterForm').submit();
            }
        </script>



        <!-- <button class="reset-button">Reset</button> -->


        <div id="data-container">
            @foreach($instructors as $item)
                <div class="item">
                    <div class="profile-section">
                        <img src="{{ $item->cover_pic }}" alt="{{ $item->name }}" class="cover-pic">
                        <div class="profile-container">
                            <img src="{{ $item->profile_pic }}" alt="{{ $item->name }}" class="profile-pic">
                            <div class="profile-info">
                                <h3>{{ $item->name }}</h3>
                                <p class="rating-location">
                                    <span>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $item->rating ? 'filled' : '' }}"></i>
                                        @endfor
                                        ({{ $item->rating }})
                                    </span>
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt" style="color: #4b24d3;"></i> {{ $item->location }}
                                    </span>
                                </p>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="info-container">
                        <div class="price-section">
                            <p class="class-label">{{ $item->classes_offered }} class</p>
                        </div>
                        <div class="class-info">
                            <div class="left-info">
                                <p><strong>Subject:</strong> {{ $item->subject }}</p>
                                <p><strong>Grade:</strong> {{ $item->grade }}</p>
                            </div>
                            <div class="right-info">
                                <p class="class-type"><strong>Class Type:</strong> {{ $item->class_type }}</p>
                                <p class="class-duration"><strong>Duration:</strong> {{ $item->class_duration }}</p>
                            </div>
                        </div>
                        <div class="hourly-rate">
                            <p class="price">Per person: {{ $item->hourly_rate }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    </div>
    <script>
        // Dropdown functionality
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            const button = dropdown.querySelector('.dropbtn');
            const checkboxes = dropdown.querySelectorAll('input[type="checkbox"]');
            const label = button.textContent;

            button.addEventListener('click', () => {
                dropdown.querySelector('.dropdown-content').classList.toggle('show');
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const selectedValues = Array.from(checkboxes)
                        .filter(i => i.checked)
                        .map(i => i.value)
                        .join(', ');

                    // Update button text to show selected values with icon
                    button.innerHTML = selectedValues.length > 0
                        ? `${button.querySelector('i').outerHTML} ${label}: ${selectedValues}`
                        : `${button.querySelector('i').outerHTML} ${label}`;
                });
            });
        });

        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                document.getElementById('filter-form').submit();
            });
        });


        // Global click listener to close dropdowns
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                document.querySelectorAll('.dropdown-content').forEach(content => {
                    content.classList.remove('show');
                });
            }
        };
    </script>
</body>

</html>