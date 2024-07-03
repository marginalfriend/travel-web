<header class="flex justify-between w-[100vw] align-middle text-gray-600 body-font fixed top-0 bg-white z-100">
    <div class="container mx-auto flex flex-wrap p-3 px-5 flex-col md:flex-row items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg class="w-12 h-12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                <path style="fill:#88E2DB;" d="M0,413.249c0,0,99.571-7.286,135.999-84.999S166.356,98.751,343.641,98.751
    c38.871,0,81.438,18.386,104.731,34.602c116.875,81.362,61.625,248.326-75.589,205.523c0,0,49.786-2.125,49.786-67.697
    s-82.091-75.285-94.714-20.643c-8.992,38.927-3.643,156.643,167.571,162.713" />
                <path style="fill:#A5F2EA;" d="M372.784,338.875c42.5,0,125.678-65.875,75.213-144.378c-35.287-54.897-131.676-65.997-200.283,2.61
    c-68.535,68.535-28.014,201.304-247.07,216.094c8.549-0.789,100.639-10.88,135.356-84.951
    c36.429-77.714,30.357-229.499,207.642-229.499c38.869,0,81.43,18.384,104.731,34.607
    C565.247,214.715,509.998,381.679,372.784,338.875z" />
                <path style="fill:#C9F7F1;" d="M406.626,345.468c98.15-7.286,125.848-141.731,24.747-212.111
    c-21.967-15.288-61.03-32.494-97.992-34.425c3.351-0.122,6.775-0.182,10.261-0.182c38.869,0,81.43,18.384,104.731,34.607
    C555.096,207.648,518.304,353.313,406.626,345.468z" />
                <path style="fill:#73C6BE;" d="M495.426,413.249H268.433c-25.498-10.585-35.582-47.794-21.933-103.214
    c15.166-61.576,44.686-94.762,88.642-101.999c26.411-4.347,46.895,4.299,59.973,12.945c-25.087-13.418-59.464-4.238-67.259,29.556
    C318.858,289.466,324.212,407.178,495.426,413.249z" />
            </svg>
            <span class="ml-1 text-xl">Bayah Beach</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="/" class="mr-5 hover:text-gray-900 hover:cursor-pointer">Home</a>
            <a href="/destination" class="mr-5 hover:text-gray-900 hover:cursor-pointer">Tempat Wisata</a>
            <a href="/contact" class="mr-5 hover:text-gray-900 hover:cursor-pointer">Contact</a>
            @if (auth()->check())
                <a href="/orders" class="mr-5 hover:text-gray-900 hover:cursor-pointer">Invoice</a>
                <a href="/profile" class="mr-5 hover:text-gray-900 hover:cursor-pointer">Profile</a>
            @endif
        </nav>
        @if (!auth()->check())
            <a href="/register">
                <button
                    class="inline-flex items-center bg-sky-700 border-0 py-1 px-4 focus:outline-none hover:bg-sky-500 rounded text-white mt-4 md:mt-0">Register
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </a>
        @else
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="inline-flex items-center bg-sky-700 border-0 py-1 px-4 focus:outline-none hover:bg-sky-500 rounded text-white mt-4 md:mt-0">Log
                    out
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </form>
        @endif
    </div>
</header>
