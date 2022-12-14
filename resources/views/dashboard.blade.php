<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @include('partials.dashboard.hero')


        <!-- cards -->
        <div class="container mx-auto sm:py-12 mt-4 sm:grid grid-cols-3 gap-4">
            <div
                class="p-6 max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Active
                        products</h5>
                </a>
                <div class="text-5xl font-bold p-4">
                    3
                </div>

            </div>
            <div
                class="p-6 max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h6>Limited time</h6>
                    <h5 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Some offer</h5>
                </a>
                <a href="#"
                   class="inline-flex items-center py-2 px-3 mt-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    View Details
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div
                class="p-6 max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h6>Active subscriptions</h6>
                    <h5 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Standart Plan</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Expires at: 12.12.2022</p>
                <a href="#"
                   class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Manage subscriptions
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>

        </div>

        <!-- new -->
        <div class="sm:grid grid-cols-4 gap-4 container mx-auto">
            <div class="flex w-full h-36 justify-center items-center bg-gray-600 rounded p-4">
                <span class="text-2xl font-bold text-white">Mega Plan</span>
            </div>
            <div class="flex w-full h-36 justify-center items-center bg-gray-400 rounded p-4">
                <span class="text-2xl font-bold text-white">Elite Plan</span>
            </div>
            <div class="flex w-full h-36 justify-center items-center bg-gray-400 rounded p-4">
                <span class="text-2xl font-bold text-white">Medium Plan</span>
            </div>
            <div class="flex w-full h-36 justify-center items-center bg-gray-400 rounded p-4">
                <span class="text-2xl font-bold text-white">Basic Plan</span>
            </div>
        </div>
        <div class="container mx-auto py-12 text-3xl  ">
            Need any single tool?
            Select from the List
        </div>
        <div class="container mx-auto py-4 text-3xl font-semibold">
            Products of mega plan:
        </div>
        <div class="sm:grid grid-cols-6 gap-6  py-4 container mx-auto mt-6">
            <div class="py-4 px-2 space-y-2 border rounded">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2 bg-gray-100 rounded shadow">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2 border rounded">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2 bg-gray-100 rounded shadow">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2 border rounded">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2 bg-gray-100 rounded shadow">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
            <div class="py-4 px-2 space-y-2">
                <div class="flex  w-full   justify-center items-center  rounded gap-4">
                    <img class="w-6 rounded"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                         alt="Apple Watch">
                    <span class="text-xl font-semibold  ">SEMRUSH</span>
                </div>
                <div class="text-center">
                    <button class="rounded text-sm py-1 mt-4 px-4 bg-blue-600 text-white">
                        Visit Here
                    </button>
                </div>
                <div class="text-center">
                    $ 9.99/m
                </div>
            </div>
        </div>

        <!-- available -->
        <div class="container mx-auto py-12 text-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                Available tools of mega plan</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem
                ipsum
                dolor sit amet consectetur adipisicing elit. Aspernatur optio non voluptas error quasi neque voluptate!
                Cum
                ullam quam, quia quis accusamus tenetur magni voluptas dignissimos, officia unde, pariatur enim.</p>
            <div>

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Product
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Users
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Valid through
                            </th>
                            <th scope="col" class="py-3 px-6">

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4 w-32">
                                <img class="w-20 rounded"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAY1BMVEX/ZCz/////WA7+2tL/WRP/zsP/Yif/UwD/Wxn/XiD/Vgj/YCT+Zi/949z/bj3+0cb9uaj+c0f+mX79iWj9rpn97+v+v7D+n4X+fFP96uX+1s39gl3/TAD9pY79+Pb+lXf9j28g5Wu3AAABf0lEQVRIie2U25KDIBBEDSIMKLgm3l1N/v8rM2gSMUBM1da+2Q+WoMdpmpEoOnTo0L+LuKIg2D6oYkd53Wgpdjjxc/JKneVOVVrEAVTvFGW8zW2g6/tuuRt8ZEpXyV9IHtRURpxIzsbJjArXbXrOE1tq4WIB+FADAehxWEkXvPqWFXMsQfvTlGjghhxds3BzuQmMNTqHdQOCbivuLhLa6R0cYX6SXWoctLQxV8+epK9Ennr6SjnaURJwqvRuibxtiqrVF8cNyjgmllAfGAmoLTBfXxJnXKWhcz+ISejeBzKtVCH7DyD2zaCeLWNFyAhhHBuohhDHmOCXBxq9RYhTTahftVEGS0jl5vNQ4lTm/0VMBrbs1xgzrUQCBeevrurIi2TS+B/SABjRodqQms4oo5nhErfJX0rltmhdcCl5MZ8LVSjSh11RbhpoUmoZV4FkLJRcPcdH/s1RJ2Q29htMXT6szxYThLZNnauu6lQyahnM0wsDlShCv3F56NChP+oO0dQRQhz7DtsAAAAASUVORK5CYII="
                                     alt="Apple Watch">
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                Semrush
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-3">
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="first_product"
                                               class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="1" required="">
                                    </div>
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                $599
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">One
                                    month</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium p-2 rounded bg-blue-600 text-white">Access Now</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4 w-32">
                                <img class="w-20 rounded"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAU4AAACXCAMAAABNy0IIAAAAt1BMVEX///8FStr/iAAARtkAQtkAS+AAQt72+f7/ggAAQ9wARNkASNo+a+Hn7fsAP9oAPdqpu/HN2PsxYOL/4ciCnOsUT9t+lOf/jAAAOtkYVeJkhun/+/b/0Kmou/T/li//yaU3Z+Hu8/y3w/H/nj3/kRbT3flJcuT/8eP/uHv/yJ7AzfT/rWSNouofWN5Xe+P/9+4ALNlbgegALN2Yr+4ANt3/wI7Y4fhqieb/egCyv/D/rm2Tput+mOrahqORAAAEiElEQVR4nO3cf0OiSByA8UjKhBTtyqVta+2HXtdm616unZfv/3WdzFB+R0ChHYLbns/+JwNOz9JGA+7ODgAAAAAAAAAAAAAAAAAAAAAAAACgpn58FhZVzybW+5z0cFn1rPIIXe+VO6h6NrFu6CVM21XPKo+Ws9I4rHo2sW7HSQjJ+VbktIqcVpHTqrnO6Qadlb/JWdhwPIicqum0HtvCrOq55VKvnL2w4S/p6XS6VU+nuJrlDMR0yPmryGkVOa2qZ86zDdaGruVsJq3tkLoxe4eUA6YO1K+s5UwME/uqP9G29Qlad7ab6eCvtbEyp+PvJ03vzB0Ggdjo6dd6E7nDozE8TDmmEsr1q/ZUvdby5XQ89dqktxrW18P2xax9p+yeb86ZJljLedgQX8qJfm0YypPqXA4feVkHdo2cYdwmKRQ5F25ic8MvPeen/1/OIGvYtpxO+WcnOW0ip127B2/M6Us2c/rJI7vHYlg7lO9pzEbmPHYTR2v49rqt+1O7SHGjc/7UI16vl4ycJ0fSia4z10sQLzvInM7Jpdp2ZVzf6Jx6y6Ue7hsHHqtqXl8fWN0Dap+KLS/G6rXT4XJ7U62CzJ7UX44/Ng7XNido0cWB8j1l0xd9xuoB//yRlnPtMj4+FVph5HV9zMjpqG2hsTwZ53yaqk16dGh8Q870yeypARN5Mg+Nv5f5asN8ogbrUz3oyaPt6DmMi9fa6lp/S2/IGX/PF8ipBek5U8Q5+3JvM2f2vw2ZvxUZ57/5709zLzqlG4PitbYqLadf55wOOcmpfaicW38UWc6ZfLzAC8vPafwoarbcsh65uP2mvF/Op+TTLz/0uVNiTvf57ioSH7SSB4LKyPlyGZ+mxJyOG93aDCZV3o37nXJqQZW3islpFTmtIqdVNco5K55zPnUjxgrJu+X8muLfKnO6j+fCvXzTfDmHx/dLzyPZ032ODtadJ97asrN43ci0W2FOpyUe3uoYW/LlTJnSy/XShjnYsWE1vqqc2QrlTFmN98tYmTOQ0ypyWkVOu+KcNfpR1Mk0LZKzP1X7yFWYMnP+vFV0s09fpNtKL5TO590sciFjW86e2uPKvP23WPSX7n+lW4YLeSLeGJtqdBmfLecTdA/GzXt1gd85yvcOhVzL7+iPklPPfZDvHQohp1XktIqcVn2QnCP9hIlcDyFn9+hwaSBXhDJz3o0elkbxHeHZMDI7Ej3J+Rg0loJ8y8fqE+7hlXEAckqP6kmxIqvxHXKSM0bO64Ma5RRfbEbO5Qg/b0419p1z1uh39qdpEPE35FQj8q0ozSfR2ElqTvU+YRm/s3/X4gW6G8lYA32HnM3LSHOkh58mOYt4iNgpM2c8dGEcKB7XVttK/H+B6rB8HEv9qIHipjyktX35OPlZCKdYm+JqsRofy/lBmNgbVuMr/VwROYsjp1UbPuKayLkvLja8XDlFH/s55bJGzltv73B2biNy7q14A3Puctvrf2M08MSr238MjFp7GfZTc4oBQUrO/eRxyr+TCQAAAAAAAAAAAAAAAAAAAAAAAAAAAABADv8Bvo3Pa1/Q0AUAAAAASUVORK5CYII="
                                     alt="Apple Imac">
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                ahrefs
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-3">
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="second_product"
                                               class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="1" required="">
                                    </div>
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                $2499
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">One
                                    month</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium p-2 rounded bg-blue-600 text-white">Access Now</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4 w-32">
                                <img class="w-20 rounded"
                                     src="data:image/png;base64,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"
                                     alt="Iphone 12">
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                SC Frog
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center space-x-3">
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="third_product"
                                               class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="1" required="">
                                    </div>
                                    <button
                                        class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                $999
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">One
                                    month</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium p-2 rounded bg-blue-600 text-white">Access Now</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="container mx-auto py-12 flex justify-center flex-wrap gap-8">

            <h1
                class="text-orange-600 mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                We Offer</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem
                ipsum
                dolor sit amet consectetur adipisicing elit. Aspernatur optio non voluptas error quasi neque voluptate!
                Cum
                ullam quam, quia quis accusamus tenetur magni voluptas dignissimos, officia unde, pariatur enim.</p>


            <div
                class="p-4 w-full max-w-sm bg-white rounded-lg border shadow-md sm:p-8 hover:scale-105 transform duration-150">
                <h5 class="mb-4 text-xl font-medium text-gray-500 -400">Standard plan</h5>
                <div class="flex items-baseline text-gray-900 ">
                    <span class="text-3xl font-semibold">$</span>
                    <span class="text-5xl font-extrabold tracking-tight">49</span>
                    <span class="ml-1 text-xl font-normal text-gray-500 -400">/month</span>
                </div>
                <!-- List -->
                <ul role="list" class="my-7 space-y-5">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">2 team members</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">limited tools</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">Integration help</span>
                    </li>
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">Support Files</span>
                    </li>
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
                    </li>
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                    </li>
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">24×7 phone &amp; email
                        support</span>
                    </li>
                </ul>
                <button type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 -blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                    Choose
                    plan
                </button>
            </div>
            <div
                class="p-4 w-full max-w-sm bg-white rounded-lg border shadow-md sm:p-8 hover:scale-110 scale-105 transform duration-150">
                <h5 class="mb-4 text-xl font-medium text-gray-500 -400">Medium plan</h5>
                <div class="flex items-baseline text-gray-900 ">
                    <span class="text-3xl font-semibold">$</span>
                    <span class="text-5xl font-extrabold tracking-tight">149</span>
                    <span class="ml-1 text-xl font-normal text-gray-500 -400">/month</span>
                </div>
                <!-- List -->
                <ul role="list" class="my-7 space-y-5">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">2 team members</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">limited tools</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">Integration help</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">Support Files</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">API Access</span>
                    </li>

                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                    </li>
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">24×7 phone &amp; email
                        support</span>
                    </li>
                </ul>
                <button type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 -blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                    Choose
                    plan
                </button>
            </div>
            <div
                class="p-4 w-full max-w-sm bg-white rounded-lg border shadow-md sm:p-8 hover:scale-105 transform duration-150">
                <h5 class="mb-4 text-xl font-medium text-gray-500 -400">Pro plan</h5>
                <div class="flex items-baseline text-gray-900 ">
                    <span class="text-3xl font-semibold">$</span>
                    <span class="text-5xl font-extrabold tracking-tight">549</span>
                    <span class="ml-1 text-xl font-normal text-gray-500 -400">/month</span>
                </div>
                <!-- List -->
                <ul role="list" class="my-7 space-y-5">
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">2 team members</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">limited tools</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">Integration help</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">Support Files</span>
                    </li>
                    <li class="flex space-x-3">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 -500" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 -400">API Access</span>
                    </li>

                    <li class="flex space-x-3  decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                    </li>
                    <li class="flex space-x-3  decoration-gray-500">
                        <!-- Icon -->
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600" fill="currentColor"
                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Check icon</title>
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">24×7 phone &amp; email
                        support</span>
                    </li>
                </ul>
                <button type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 -blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
                    Choose
                    plan
                </button>
            </div>


        </div>


        <div class="container mx-auto py-12 text-center">

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                instructions or warnings </h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Lorem
                ipsum
                dolor sit amet consectetur adipisicing elit. Aspernatur optio non v
                <!-- cards -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="relative flex flex-col bg-clip-border bg-white text-gray-700 rounded-2xl shadow-lg shadow-gray-500/10">
                    <div class="p-6 px-8 text-center">
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] text-sm bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] pointer-events-none mb-6 rounded-full"
                            type="button"><span
                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                      d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                      clip-rule="evenodd"></path>
                            </svg></span></button>
                        <h5
                            class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2">
                            Simple Card</h5>
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum iure vero inventore
                            nostrum em
                            soluta at et vitae assumenda quidem
                            debitis, veritatis ex..</p>
                    </div>
                </div>
                <div
                    class="relative flex flex-col bg-clip-border bg-white text-gray-700 rounded-2xl shadow-lg shadow-gray-500/10">
                    <div class="p-6 px-8 text-center">
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] text-sm bg-gradient-to-tr from-red-600 to-red-400 text-white shadow-md shadow-red-500/20 hover:shadow-lg hover:shadow-red-500/40 active:opacity-[0.85] pointer-events-none mb-6 rounded-full"
                            type="button"><span
                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                      d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-3.183a.75.75 0 100 1.5h4.992a.75.75 0 00.75-.75V4.356a.75.75 0 00-1.5 0v3.18l-1.9-1.9A9 9 0 003.306 9.67a.75.75 0 101.45.388zm15.408 3.352a.75.75 0 00-.919.53 7.5 7.5 0 01-12.548 3.364l-1.902-1.903h3.183a.75.75 0 000-1.5H2.984a.75.75 0 00-.75.75v4.992a.75.75 0 001.5 0v-3.18l1.9 1.9a9 9 0 0015.059-4.035.75.75 0 00-.53-.918z"
                                      clip-rule="evenodd"></path>
                            </svg></span></button>
                        <h5
                            class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2">
                            Prety Card</h5>
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            Keep
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Des lor reiciendis tempore illo,
                            corrupti debitis! Dolorem, accusantium. Nesciunt..</p>
                    </div>
                </div>
                <div
                    class="relative flex flex-col bg-clip-border bg-white text-gray-700 rounded-2xl shadow-lg shadow-gray-500/10">
                    <div class="p-6 px-8 text-center">
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] text-sm bg-gradient-to-tr from-teal-600 to-teal-400 text-white shadow-md shadow-teal-500/20 hover:shadow-lg hover:shadow-teal-500/40 active:opacity-[0.85] pointer-events-none mb-6 rounded-full"
                            type="button"><span
                                class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-white">
                                <path fill-rule="evenodd"
                                      d="M12 3.75a6.715 6.715 0 00-3.722 1.118.75.75 0 11-.828-1.25 8.25 8.25 0 0112.8 6.883c0 3.014-.574 5.897-1.62 8.543a.75.75 0 01-1.395-.551A21.69 21.69 0 0018.75 10.5 6.75 6.75 0 0012 3.75zM6.157 5.739a.75.75 0 01.21 1.04A6.715 6.715 0 005.25 10.5c0 1.613-.463 3.12-1.265 4.393a.75.75 0 01-1.27-.8A6.715 6.715 0 003.75 10.5c0-1.68.503-3.246 1.367-4.55a.75.75 0 011.04-.211zM12 7.5a3 3 0 00-3 3c0 3.1-1.176 5.927-3.105 8.056a.75.75 0 11-1.112-1.008A10.459 10.459 0 007.5 10.5a4.5 4.5 0 119 0c0 .547-.022 1.09-.067 1.626a.75.75 0 01-1.495-.123c.041-.495.062-.996.062-1.503a3 3 0 00-3-3zm0 2.25a.75.75 0 01.75.75A15.69 15.69 0 018.97 20.738a.75.75 0 01-1.14-.975A14.19 14.19 0 0011.25 10.5a.75.75 0 01.75-.75zm3.239 5.183a.75.75 0 01.515.927 19.415 19.415 0 01-2.585 5.544.75.75 0 11-1.243-.84 17.912 17.912 0 002.386-5.116.75.75 0 01.927-.515z"
                                      clip-rule="evenodd"></path>
                            </svg></span></button>
                        <h5
                            class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2">
                            Even more simple card</h5>
                        <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                            Lorem ipsum, dolor sit amet consectetur adipisici st, officiis doloremque dolorum
                            praesentium
                            nihil? Soluta tempora ipsum suscipit?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
