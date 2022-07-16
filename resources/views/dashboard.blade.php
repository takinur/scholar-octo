<x-app-layout>

    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 h-screen">


        <main class="p-5 bg-light-blue">
            <div class="flex justify-start items-start my-2 w-full">
                <div class="w-full sm:w-10/12 md:w-11/12 my-1 ">
                    <h2 class="text-xl font-semibold text-vnet-blue mb-2">Any title If we need</h2>
                    <ul class="flex flex-col mt-4">
                        <li class=" bg-[#1f3a56] my-2  text-white shadow-lg" x-data="accordion(1)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>First Column</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-gray-200 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all bg-white">
                                <div class="bg-gray-300 h-8 m-6 text-gray-800">
                                    ESCRIBE_CON
                                </div>
                                <div class="flex flex-wrap">
                                    <!--First Section-->
                                    <div class="w-full lg:w-6/12 px-4 text-gray-700">
                                        <!--Form Item -->
                                        <div class="md:flex md:items-center mb-1">
                                            <div class="md:w-1/3">
                                                <label
                                                    class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                    for="inline-full-name">
                                                    A_Paterro
                                                </label>
                                            </div>
                                            <div class="md:w-2/3">
                                                <input
                                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                                    id="inline-full-name" type="text">
                                            </div>
                                        </div>
                                        <!--Form Item -->
                                        <div class="md:flex md:items-center mb-1">
                                            <div class="md:w-1/3">
                                                <label
                                                    class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                    for="inline-full-name">
                                                    A_Paterro
                                                </label>
                                            </div>
                                            <div class="md:w-2/3">
                                                <input
                                                    class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                                    id="inline-full-name" type="text">
                                            </div>
                                        </div>
                                        <!--Dat Picker -->
                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                                            <div class="container mx-auto px-4 py-2 md:py-10">
                                                <div class="mb-5 w-64">
                                                    <label for="datepicker"
                                                        class="font-bold mb-1 text-gray-700 block">Select Date</label>
                                                    <div class="relative">
                                                        <input type="hidden" name="date" x-ref="date"
                                                            :value="datepickerValue" />
                                                        <input type="text" x-on:click="showDatepicker = !showDatepicker"
                                                            x-model="datepickerValue"
                                                            x-on:keydown.escape="showDatepicker = false"
                                                            class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 font-medium focus:ring focus:ring-blue-600 focus:ring-opacity-50"
                                                            placeholder="Select date" readonly />

                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                            <svg class="h-6 w-6 text-gray-400" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                            </svg>
                                                        </div>

                                                        <div class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                            style="width: 17rem" x-show.transition="showDatepicker"
                                                            @click.away="showDatepicker = false">
                                                            <div class="flex justify-between items-center mb-2">
                                                                <div>
                                                                    <span x-text="MONTH_NAMES[month]"
                                                                        class="text-lg font-bold text-gray-800"></span>
                                                                    <span x-text="year"
                                                                        class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                                                        @click="if (month == 0) {
                                                                                        year--;
                                                                                        month = 12;
                                                                                    } month--; getNoOfDays()">
                                                                        <svg class="h-6 w-6 text-gray-400 inline-flex"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M15 19l-7-7 7-7" />
                                                                        </svg>
                                                                    </button>
                                                                    <button type="button"
                                                                        class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                                                        @click="if (month == 11) {
                                                                                        month = 0;
                                                                                        year++;
                                                                                    } else {
                                                                                        month++;
                                                                                    } getNoOfDays()">
                                                                        <svg class="h-6 w-6 text-gray-400 inline-flex"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M9 5l7 7-7 7" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                <template x-for="(day, index) in DAYS" :key="index">
                                                                    <div style="width: 14.26%" class="px-0.5">
                                                                        <div x-text="day"
                                                                            class="text-gray-800 font-medium text-center text-xs">
                                                                        </div>
                                                                    </div>
                                                                </template>
                                                            </div>

                                                            <div class="flex flex-wrap -mx-1">
                                                                <template x-for="blankday in blankdays">
                                                                    <div style="width: 14.28%"
                                                                        class="text-center border p-1 border-transparent text-sm">
                                                                    </div>
                                                                </template>
                                                                <template x-for="(date, dateIndex) in no_of_days"
                                                                    :key="dateIndex">
                                                                    <div style="width: 14.28%" class="px-1 mb-1">
                                                                        <div @click="getDateValue(date)" x-text="date"
                                                                            class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                            :class="{
                                                              'bg-indigo-200': isToday(date) == true,
                                                              'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                                              'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                                            }"></div>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Form Item -->
                                            <div class="md:flex md:items-center mb-1">
                                                <div class="md:w-1/3">
                                                    <label
                                                        class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                                                        for="inline-full-name">
                                                        SELECT
                                                    </label>
                                                </div>
                                                <div class="md:w-2/3">
                                                    <select
                                                        class="form-select w-full px-3 py-2 mb-1 border-2 bg-gray-200 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                                                        <option value="01">01 - January</option>
                                                        <option value="02">02 - February</option>
                                                        <option value="03">03 - March</option>
                                                        <option value="04">04 - April</option>
                                                        <option value="05">05 - May</option>
                                                        <option value="06">06 - June</option>
                                                        <option value="07">07 - July</option>
                                                        <option value="08">08 - August</option>
                                                        <option value="09">09 - September</option>
                                                        <option value="10">10 - October</option>
                                                        <option value="11">11 - November</option>
                                                        <option value="12">12 - December</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--First Section-->
                                        <div class="w-full lg:w-6/12 px-4 text-gray-700">
                                            Second section
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class=" bg-[#1f3a56] my-2  text-white shadow-lg" x-data="accordion(2)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>Second Column</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-gray-200 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all bg-white">
                                <p class="p-3 text-gray-900">
                                    Shipping time is set by our delivery partners, according to the delivery method
                                    chosen by you. Additional details can be found in the order confirmation
                                </p>
                            </div>
                        </li>
                        <li class=" bg-[#1f3a56] my-2  text-white shadow-lg" x-data="accordion(3)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>3rd Column</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-gray-200 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all bg-white">
                                <p class="p-3 text-gray-900">
                                    Shipping time is set by our delivery partners, according to the delivery method
                                    chosen by you. Additional details can be found in the order confirmation
                                </p>
                            </div>
                        </li>
                        <li class=" bg-[#1f3a56] my-2  text-white shadow-lg" x-data="accordion(4)">
                            <h2 @click="handleClick()"
                                class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                <span>4th Column</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-gray-200 h-6 w-6 transform transition-transform duration-500"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                    </path>
                                </svg>
                            </h2>
                            <div x-ref="tab" :style="handleToggle()"
                                class="border-l-2 border-blue-600 overflow-hidden max-h-0 duration-500 transition-all bg-white">
                                <p class="p-3 text-gray-900">
                                    Shipping time is set by our delivery partners, according to the delivery method
                                    chosen by you. Additional details can be found in the order confirmation
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <button
                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-gray-100 rounded-full shadow ripple hover:shadow-lg hover:bg-gray-200 focus:outline-none">
                SAVE
            </button>
        </main>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
              Alpine.store('accordion', {
                tab: 0
              });

              Alpine.data('accordion', (idx) => ({
                init() {
                  this.idx = idx;
                },
                idx: -1,
                handleClick() {
                  this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                  return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                  return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
              }));
            })

        //Date Picker
        const MONTH_NAMES = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    const MONTH_SHORT_NAMES = [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ];
    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function app() {
      return {
        showDatepicker: false,
        datepickerValue: "",
        selectedDate: "2021-02-04",
        dateFormat: "DD-MM-YYYY",
        month: "",
        year: "",
        no_of_days: [],
        blankdays: [],
        initDate() {
          let today;
          if (this.selectedDate) {
            today = new Date(Date.parse(this.selectedDate));
          } else {
            today = new Date();
          }
          this.month = today.getMonth();
          this.year = today.getFullYear();
          this.datepickerValue = this.formatDateForDisplay(
            today
          );
        },
        formatDateForDisplay(date) {
          let formattedDay = DAYS[date.getDay()];
          let formattedDate = ("0" + date.getDate()).slice(
            -2
          ); // appends 0 (zero) in single digit date
          let formattedMonth = MONTH_NAMES[date.getMonth()];
          let formattedMonthShortName =
            MONTH_SHORT_NAMES[date.getMonth()];
          let formattedMonthInNumber = (
            "0" +
            (parseInt(date.getMonth()) + 1)
          ).slice(-2);
          let formattedYear = date.getFullYear();
          if (this.dateFormat === "DD-MM-YYYY") {
            return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
          }
          if (this.dateFormat === "YYYY-MM-DD") {
            return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
          }
          if (this.dateFormat === "D d M, Y") {
            return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
          }
          return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
        },
        isSelectedDate(date) {
          const d = new Date(this.year, this.month, date);
          return this.datepickerValue ===
            this.formatDateForDisplay(d) ?
            true :
            false;
        },
        isToday(date) {
          const today = new Date();
          const d = new Date(this.year, this.month, date);
          return today.toDateString() === d.toDateString() ?
            true :
            false;
        },
        getDateValue(date) {
          let selectedDate = new Date(
            this.year,
            this.month,
            date
          );
          this.datepickerValue = this.formatDateForDisplay(
            selectedDate
          );
          // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
          this.isSelectedDate(date);
          this.showDatepicker = false;
        },
        getNoOfDays() {
          let daysInMonth = new Date(
            this.year,
            this.month + 1,
            0
          ).getDate();
          // find where to start calendar day of week
          let dayOfWeek = new Date(
            this.year,
            this.month
          ).getDay();
          let blankdaysArray = [];
          for (var i = 1; i <= dayOfWeek; i++) {
            blankdaysArray.push(i);
          }
          let daysArray = [];
          for (var i = 1; i <= daysInMonth; i++) {
            daysArray.push(i);
          }
          this.blankdays = blankdaysArray;
          this.no_of_days = daysArray;
        },
      };
    }
    </script>
</x-app-layout>
