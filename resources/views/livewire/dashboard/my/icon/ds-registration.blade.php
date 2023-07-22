@section('title', 'DS Academy Registration')
<div x-data="{ step: 1 }"
    class="flex justify-center py-14 md:py-72 bg-[#00161B] min-h-screen w-full font-montserrat relative overflow-hidden z-0">
    <div>
        <div
            class="absolute top-[-250px] left-[-300px] w-[450px] h-[450px] bg-[#00D0FF] rounded-full  blur-[300px] invisible lg:visible">
        </div>
    </div>
    <div class="flex justify-center relative z-20 md:-mt-[85px]">
        {{-- Header Form --}}
        <div class="max-w-2xl lg:max-w-full mx-4 md:mx-8 pb-10 h-max lg:h-max bg-[#1C1C1C] shadow-xl">
            <div class="max-w-[1000px] w-full h-full lg:h-[281px]  ">
                <img class="" src="{{ asset('images/gts/ICON.png') }}">
            </div>
            {{-- Form Content --}}
            <div class="flex flex-col items-center justify-center max-w-xl mx-auto lg:max-w-full">
                <h1
                    class="text-white text-center mt-[30px] mb-[30px] lg:mt-[62px] lg:mb-[50px] text-[16px] lg:text-[26px] font-bold px-4">
                    Form Pendaftaran Data Science Academy</h1>
                <div class="relative flex flex-row w-full pb-1">
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 h-8 p-2 rounded-full lg:w-16 lg:h-16"
                        x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <x-heroicon-s-user-group class="w-4 text-white lg:w-12" />
                    </div>
                    <div class="relative max-w-[415px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 2 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 h-8 p-2 rounded-full lg:w-16 lg:h-16"
                        x-bind:class="step >= 2 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <svg class="w-4 lg:w-12" viewBox="0 0 30 28" xmlns="http://www.w3.org/2000/svg">
                            <path class="" x-bind:class="step >= 2 ? 'fill-white' : ''"
                                d="M14.9917 23.125C17.9555 23.125 20.4687 22.0902 22.5312 20.0205C24.5937 17.9508 25.6249 15.444 25.6249 12.5C25.6249 11.6854 25.5364 10.9036 25.3593 10.1547C25.1822 9.40572 24.9374 8.6875 24.6249 8C24.0416 8.4375 23.4102 8.77604 22.7309 9.01562C22.0516 9.25521 21.3496 9.375 20.6249 9.375C19.4791 9.375 18.4218 9.08333 17.4531 8.5C16.4843 7.91667 15.6666 7.15625 14.9999 6.21875C14.3333 7.15625 13.5155 7.91667 12.5468 8.5C11.578 9.08333 10.5208 9.375 9.37492 9.375C8.65028 9.375 7.94829 9.25521 7.26896 9.01562C6.5896 8.77604 5.95826 8.4375 5.37493 8C5.06243 8.6875 4.81763 9.41146 4.64055 10.1719C4.46347 10.9323 4.37493 11.7083 4.37493 12.5C4.37493 15.444 5.40896 17.9508 7.47702 20.0205C9.54506 22.0902 12.0499 23.125 14.9917 23.125ZM11.0695 15.5312C11.5439 15.5312 11.9426 15.3674 12.2655 15.0398C12.5885 14.7122 12.7499 14.3112 12.7499 13.8367C12.7499 13.3622 12.5861 12.9635 12.2585 12.6406C11.9309 12.3177 11.5299 12.1562 11.0554 12.1562C10.5809 12.1562 10.1822 12.3201 9.8593 12.6477C9.53638 12.9753 9.37492 13.3763 9.37492 13.8508C9.37492 14.3253 9.53873 14.724 9.86633 15.0469C10.194 15.3698 10.595 15.5312 11.0695 15.5312ZM18.9757 15.5312C19.4502 15.5312 19.8489 15.3674 20.1718 15.0398C20.4947 14.7122 20.6562 14.3112 20.6562 13.8367C20.6562 13.3622 20.4924 12.9635 20.1648 12.6406C19.8371 12.3177 19.4361 12.1562 18.9616 12.1562C18.4872 12.1562 18.0885 12.3201 17.7656 12.6477C17.4426 12.9753 17.2812 13.3763 17.2812 13.8508C17.2812 14.3253 17.445 14.724 17.7726 15.0469C18.1002 15.3698 18.5012 15.5312 18.9757 15.5312ZM9.37492 7.5C10.6874 7.5 11.7968 7.04688 12.703 6.14062C13.6093 5.23438 14.0624 4.125 14.0624 2.8125V1.90625C12.4583 2.05208 10.9895 2.51562 9.65617 3.29688C8.32284 4.07812 7.21868 5.09375 6.34368 6.34375C6.76034 6.69792 7.22742 6.97917 7.74489 7.1875C8.26235 7.39583 8.8057 7.5 9.37492 7.5ZM20.6249 7.5C21.1942 7.5 21.7375 7.39583 22.255 7.1875C22.7724 6.97917 23.2395 6.69792 23.6562 6.34375C22.7812 5.09375 21.677 4.07812 20.3437 3.29688C19.0103 2.51562 17.5416 2.05208 15.9374 1.90625V2.8125C15.9374 4.125 16.3906 5.23438 17.2968 6.14062C18.2031 7.04688 19.3124 7.5 20.6249 7.5ZM2.06242 27.5C1.51774 27.5 1.05865 27.2969 0.685175 26.8906C0.311675 26.4844 0.145758 26.0104 0.187425 25.4688L1.37492 12.4375C1.54159 10.6875 2.01555 9.05208 2.7968 7.53125C3.57805 6.01042 4.57805 4.69271 5.7968 3.57812C7.01555 2.46354 8.41138 1.58854 9.9843 0.953125C11.5572 0.317708 13.2291 0 14.9999 0C16.7708 0 18.4426 0.317708 20.0156 0.953125C21.5885 1.58854 22.9843 2.46354 24.2031 3.57812C25.4218 4.69271 26.4218 6.01042 27.2031 7.53125C27.9843 9.05208 28.4583 10.6875 28.6249 12.4375L29.8124 25.4688C29.8541 26.0104 29.6882 26.4844 29.3147 26.8906C28.9412 27.2969 28.4821 27.5 27.9374 27.5H2.06242ZM14.9983 25C12.1244 25 9.57805 24.1354 7.3593 22.4062C5.14055 20.6771 3.66659 18.4792 2.93742 15.8125L2.06242 25.625H27.9374L27.0624 15.8125C26.3333 18.4792 24.8645 20.6771 22.6562 22.4062C20.4478 24.1354 17.8952 25 14.9983 25ZM14.9983 25.625H27.9374H2.06242H14.9983Z"
                                fill="#B5B3BC" />
                        </svg>
                    </div>
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 3 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 h-8 p-2 rounded-full lg:w-16 lg:h-16"
                        x-bind:class="step >= 3 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <svg class="w-4 lg:w-12" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path class="" x-bind:class="step >= 3 ? 'fill-white' : ''"
                                d="M13.75 27.5C11.8708 27.5 10.0948 27.1391 8.42188 26.4172C6.74896 25.6953 5.28802 24.7099 4.03906 23.4609C2.7901 22.212 1.80469 20.751 1.08281 19.0781C0.360938 17.4052 0 15.6292 0 13.75C0 11.8479 0.360938 10.0604 1.08281 8.3875C1.80469 6.71458 2.7901 5.25938 4.03906 4.02188C5.28802 2.78438 6.74896 1.80469 8.42188 1.08281C10.0948 0.360938 11.8708 0 13.75 0C15.6521 0 17.4396 0.360938 19.1125 1.08281C20.7854 1.80469 22.2406 2.78438 23.4781 4.02188C24.7156 5.25938 25.6953 6.71458 26.4172 8.3875C27.1391 10.0604 27.5 11.8479 27.5 13.75C27.5 15.6292 27.1391 17.4052 26.4172 19.0781C25.6953 20.751 24.7156 22.212 23.4781 23.4609C22.2406 24.7099 20.7854 25.6953 19.1125 26.4172C17.4396 27.1391 15.6521 27.5 13.75 27.5ZM13.7483 2.0625C10.9536 2.0625 8.50208 2.9276 6.39375 4.65781C4.28542 6.38802 2.93333 8.57083 2.3375 11.2063C3.27708 11.2063 4.05052 10.9828 4.65781 10.5359C5.2651 10.0891 5.90104 9.2125 6.56563 7.90625C6.88073 7.26041 7.34288 6.7552 7.95207 6.39062C8.56129 6.02604 9.23352 5.84375 9.96875 5.84375H17.5313C18.2665 5.84375 18.9387 6.02604 19.5479 6.39062C20.1571 6.7552 20.6193 7.26041 20.9344 7.90625C21.599 9.28125 22.2635 10.175 22.9281 10.5875C23.5927 11 24.3375 11.2063 25.1625 11.2063C24.5667 8.57083 23.2203 6.38802 21.1234 4.65781C19.0266 2.9276 16.5682 2.0625 13.7483 2.0625ZM13.7409 25.4375C17.0011 25.4375 19.7656 24.2974 22.0344 22.0172C24.3031 19.737 25.4375 16.9813 25.4375 13.75V13.3375C23.6958 13.3375 22.3495 12.8849 21.3984 11.9797C20.4474 11.0745 19.674 10.0375 19.0781 8.86875C18.9177 8.54792 18.7032 8.30729 18.4347 8.14688C18.1662 7.98646 17.8765 7.90625 17.5656 7.90625H9.96875C9.63165 7.90625 9.32966 7.98646 9.0628 8.14688C8.79593 8.30729 8.58229 8.54792 8.42188 8.86875C7.82604 10.0604 7.03542 11.1089 6.05 12.0141C5.06458 12.9193 3.73542 13.3719 2.0625 13.3719V13.75C2.0625 16.9813 3.19993 19.737 5.4748 22.0172C7.74965 24.2974 10.505 25.4375 13.7409 25.4375ZM9.41102 17.0844C8.88909 17.0844 8.45052 16.9042 8.09531 16.5438C7.74011 16.1834 7.5625 15.7423 7.5625 15.2204C7.5625 14.6985 7.74268 14.2599 8.10305 13.9047C8.46344 13.5495 8.90458 13.3719 9.42649 13.3719C9.94841 13.3719 10.387 13.5521 10.7422 13.9124C11.0974 14.2728 11.275 14.714 11.275 15.2359C11.275 15.7578 11.0948 16.1964 10.7345 16.5516C10.3741 16.9068 9.93292 17.0844 9.41102 17.0844ZM18.1079 17.0844C17.586 17.0844 17.1474 16.9042 16.7922 16.5438C16.437 16.1834 16.2594 15.7423 16.2594 15.2204C16.2594 14.6985 16.4396 14.2599 16.7999 13.9047C17.1603 13.5495 17.6015 13.3719 18.1234 13.3719C18.6453 13.3719 19.0839 13.5521 19.4391 13.9124C19.7943 14.2728 19.9719 14.714 19.9719 15.2359C19.9719 15.7578 19.7917 16.1964 19.4313 16.5516C19.0709 16.9068 18.6298 17.0844 18.1079 17.0844Z"
                                fill="#B5B3BC" />
                        </svg>
                    </div>
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 h-8 p-2 rounded-full lg:w-16 lg:h-16"
                        x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <svg class="w-4 lg:w-12" viewBox="0 0 31 31" xmlns="http://www.w3.org/2000/svg">
                            <path class="" x-bind:class="step >= 4 ? 'fill-white' : ''"
                                d="M12.4625 20.3261C11.9277 20.3261 11.4782 20.1415 11.1142 19.7722C10.7502 19.4029 10.5682 18.9508 10.5682 18.4159C10.5682 17.8811 10.7528 17.4316 11.1221 17.0676C11.4915 16.7036 11.9435 16.5216 12.4784 16.5216C13.0132 16.5216 13.4627 16.7062 13.8267 17.0755C14.1907 17.4449 14.3727 17.8969 14.3727 18.4318C14.3727 18.9667 14.1881 19.4161 13.8188 19.7801C13.4495 20.1441 12.9974 20.3261 12.4625 20.3261ZM21.375 20.3261C20.8402 20.3261 20.3907 20.1415 20.0267 19.7722C19.6627 19.4029 19.4807 18.9508 19.4807 18.4159C19.4807 17.8811 19.6653 17.4316 20.0346 17.0676C20.404 16.7036 20.856 16.5216 21.3909 16.5216C21.9257 16.5216 22.3752 16.7062 22.7392 17.0755C23.1032 17.4449 23.2852 17.8969 23.2852 18.4318C23.2852 18.9667 23.1006 19.4161 22.7313 19.7801C22.362 20.1441 21.9099 20.3261 21.375 20.3261ZM16.9091 28.8864C20.2527 28.8864 23.0849 27.7245 25.4055 25.4007C27.7261 23.0769 28.8864 20.2409 28.8864 16.8927C28.8864 16.293 28.8394 15.6996 28.7455 15.1125C28.6515 14.5254 28.5341 13.9852 28.3932 13.492C27.9235 13.6095 27.4155 13.6917 26.8692 13.7386C26.3229 13.7856 25.7506 13.8091 25.1523 13.8091C22.8715 13.8091 20.7161 13.3394 18.6861 12.4C16.656 11.4606 14.9246 10.122 13.492 8.38409C12.6936 10.2864 11.5487 11.9479 10.0574 13.3687C8.5661 14.7896 6.85758 15.8892 4.93182 16.6675V16.9091C4.93182 20.2527 6.09211 23.0849 8.41269 25.4055C10.7333 27.7261 13.5654 28.8864 16.9091 28.8864ZM13.6682 5.38977C15.7348 7.80871 17.643 9.46439 19.3926 10.3568C21.1422 11.2492 23.0621 11.6955 25.1523 11.6955C25.7159 11.6955 26.1621 11.6837 26.4909 11.6602C26.8197 11.6367 27.1837 11.5663 27.583 11.4489C26.5261 9.54659 25.0877 7.98485 23.2676 6.76364C21.4475 5.54242 19.328 4.93182 16.9091 4.93182C16.275 4.93182 15.6761 4.97879 15.1125 5.07273C14.5489 5.16667 14.0674 5.27235 13.6682 5.38977ZM5.24886 14.1614C6.37614 13.7386 7.66193 12.7816 9.10625 11.2903C10.5506 9.79905 11.578 7.99659 12.1886 5.88295C10.1455 6.79886 8.60133 7.96724 7.55625 9.38807C6.51117 10.8089 5.74205 12.4 5.24886 14.1614ZM4.12159 10.9557C4.82614 9.45265 5.76553 8.11401 6.93977 6.93977C8.11401 5.76553 9.45265 4.82614 10.9557 4.12159C10.5095 3.51098 9.94599 3.02367 9.26523 2.65966C8.58448 2.29564 7.83281 2.11364 7.01023 2.11364C5.63864 2.11364 4.47964 2.58683 3.53322 3.53322C2.58683 4.47964 2.11364 5.63864 2.11364 7.01023C2.11364 7.83281 2.29564 8.58448 2.65966 9.26523C3.02367 9.94599 3.51098 10.5095 4.12159 10.9557ZM16.9091 31C14.9598 31 13.128 30.6301 11.4136 29.8903C9.69924 29.1506 8.20795 28.1466 6.93977 26.8784C5.67159 25.6102 4.66761 24.1189 3.92784 22.4045C3.18807 20.6902 2.81818 18.8583 2.81818 16.9091C2.81818 16.228 2.86515 15.5528 2.95909 14.8835C3.05303 14.2142 3.19394 13.5742 3.38182 12.9636C2.37197 12.353 1.55587 11.5252 0.933523 10.4801C0.311174 9.43504 0 8.27841 0 7.01023C0 5.06099 0.681061 3.4053 2.04318 2.04318C3.4053 0.681061 5.06099 0 7.01023 0C8.25492 0 9.39981 0.299432 10.4449 0.898295C11.49 1.49716 12.3295 2.325 12.9636 3.38182C13.5742 3.19394 14.2142 3.05303 14.8835 2.95909C15.5528 2.86515 16.228 2.81818 16.9091 2.81818C18.8583 2.81818 20.6902 3.18807 22.4045 3.92784C24.1189 4.66761 25.6102 5.67159 26.8784 6.93977C28.1466 8.20795 29.1506 9.69924 29.8903 11.4136C30.6301 13.128 31 14.9598 31 16.9091C31 18.8583 30.6301 20.6902 29.8903 22.4045C29.1506 24.1189 28.1466 25.6102 26.8784 26.8784C25.6102 28.1466 24.1189 29.1506 22.4045 29.8903C20.6902 30.6301 18.8583 31 16.9091 31Z"
                                fill="#B5B3BC" />
                        </svg>
                    </div>
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                    <div class="w-8 h-8 p-2 rounded-full lg:w-16 lg:h-16"
                        x-bind:class="step >= 5 ? 'bg-gradient-blue-r' : 'bg-white'">
                        <svg class="w-4 lg:w-11" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <path class="" x-bind:class="step >= 5 ? 'fill-white' : ''"
                                d="M24.9609 18.4961L23.6572 10.6836C23.5303 9.93164 22.8809 9.37988 22.1143 9.37988H10.1611V6.25488H14.8486C15.2783 6.25488 15.6299 5.90332 15.6299 5.47363V0.78125C15.6299 0.351562 15.2783 0 14.8486 0H2.34863C1.91895 0 1.56738 0.351562 1.56738 0.78125V5.46875C1.56738 5.89844 1.91895 6.25 2.34863 6.25H7.03613V9.375H2.89062C2.12891 9.375 1.47461 9.92676 1.34766 10.6787L0.0439453 18.4912C0.0146484 18.6621 0 18.833 0 19.0039V23.4375C0 24.3018 0.698242 25 1.5625 25H23.4375C24.3018 25 25 24.3018 25 23.4375V19.0088C25.0049 18.8379 24.9902 18.667 24.9609 18.4961ZM13.6768 12.1094C13.6768 11.6797 14.0283 11.3281 14.458 11.3281H15.2393C15.6689 11.3281 16.0205 11.6797 16.0205 12.1094V12.8906C16.0205 13.3203 15.6689 13.6719 15.2393 13.6719H14.458C14.0283 13.6719 13.6768 13.3203 13.6768 12.8906V12.1094ZM12.1143 15.2344H12.8955C13.3252 15.2344 13.6768 15.5859 13.6768 16.0156V16.7969C13.6768 17.2266 13.3252 17.5781 12.8955 17.5781H12.1143C11.6846 17.5781 11.333 17.2266 11.333 16.7969V16.0156C11.333 15.5859 11.6846 15.2344 12.1143 15.2344ZM10.5518 11.3281C10.9814 11.3281 11.333 11.6797 11.333 12.1094V12.8906C11.333 13.3203 10.9814 13.6719 10.5518 13.6719H9.77051C9.34082 13.6719 8.98926 13.3203 8.98926 12.8906V12.1094C8.98926 11.6797 9.34082 11.3281 9.77051 11.3281H10.5518ZM3.91113 3.90625V2.34375H13.2861V3.90625H3.91113ZM5.86426 13.6719H5.08301C4.65332 13.6719 4.30176 13.3203 4.30176 12.8906V12.1094C4.30176 11.6797 4.65332 11.3281 5.08301 11.3281H5.86426C6.29395 11.3281 6.64551 11.6797 6.64551 12.1094V12.8906C6.64551 13.3203 6.29395 13.6719 5.86426 13.6719ZM6.64551 16.7969V16.0156C6.64551 15.5859 6.99707 15.2344 7.42676 15.2344H8.20801C8.6377 15.2344 8.98926 15.5859 8.98926 16.0156V16.7969C8.98926 17.2266 8.6377 17.5781 8.20801 17.5781H7.42676C6.99707 17.5781 6.64551 17.2266 6.64551 16.7969ZM17.1924 22.2656C17.1924 22.4805 17.0166 22.6562 16.8018 22.6562H8.20801C7.99316 22.6562 7.81738 22.4805 7.81738 22.2656V21.4844C7.81738 21.2695 7.99316 21.0938 8.20801 21.0938H16.8018C17.0166 21.0938 17.1924 21.2695 17.1924 21.4844V22.2656ZM18.3643 16.7969C18.3643 17.2266 18.0127 17.5781 17.583 17.5781H16.8018C16.3721 17.5781 16.0205 17.2266 16.0205 16.7969V16.0156C16.0205 15.5859 16.3721 15.2344 16.8018 15.2344H17.583C18.0127 15.2344 18.3643 15.5859 18.3643 16.0156V16.7969ZM20.708 12.8906C20.708 13.3203 20.3564 13.6719 19.9268 13.6719H19.1455C18.7158 13.6719 18.3643 13.3203 18.3643 12.8906V12.1094C18.3643 11.6797 18.7158 11.3281 19.1455 11.3281H19.9268C20.3564 11.3281 20.708 11.6797 20.708 12.1094V12.8906Z"
                                fill="#B5B3BC" />
                        </svg>
                    </div>
                    <div class="relative max-w-[228px] w-full h-[2px] bg-white flex self-center justify-self-center"
                        x-bind:class="step >= 5 ? 'bg-gradient-blue-r' : 'bg-white'">
                    </div>
                </div>



                <div class="relative flex flex-row w-full pb-6">
                    <div class="relative max-w-[100px] w-full h-[2px] bg-none flex self-center ">
                    </div>
                    <div>
                        <p class="text-[8px] lg:text-lg font-bold bg-clip-text text-transparent whitespace-nowrap"
                            x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">Identitas Tim</p>
                    </div>
                    <div class="relative xs:max-w-[75px] w-full  h-[2px] bg-none flex self-center ">
                    </div>
                    <div>
                        <p class="text-[8px] lg:text-lg font-bold bg-clip-text text-transparent whitespace-nowrap"
                            x-bind:class="step >= 2 ? 'bg-gradient-blue-r' : 'bg-white'">Ketua</p>
                    </div>
                    <div class="relative max-w-[110px] w-full  h-[2px] bg-none flex self-center ">
                    </div>
                    <div>
                        <p class="text-[8px] lg:text-lg font-bold bg-clip-text text-transparent whitespace-nowrap"
                            x-bind:class="step >= 3 ? 'bg-gradient-blue-r' : 'bg-white'">Anggota 1</p>
                    </div>
                    <div class="relative max-w-[85px] w-full h-[2px] bg-none flex self-center ">
                    </div>
                    <div>
                        <p class="text-[8px] lg:text-lg font-bold bg-clip-text text-transparent whitespace-nowrap"
                            x-bind:class="step >= 4 ? 'bg-gradient-blue-r' : 'bg-white'">Anggota 2</p>
                    </div>
                    <div class="relative max-w-[70px] w-full h-[2px] bg-none flex self-center ">
                    </div>
                    <div>
                        <p class="text-[8px] lg:text-lg font-bold bg-clip-text text-transparent whitespace-nowrap"
                            x-bind:class="step >= 5 ? 'bg-gradient-blue-r' : 'bg-white'">Pembayaran</p>
                    </div>
                    <div class="relative max-w-[80px] w-full h-[2px] bg-none flex self-center ">
                    </div>
                </div>




                {{-- <div class="flex flex-row mb-6 gap-x-10 xs:gap-x-20" x-bind:class="step <= 3 ? '' : 'hidden'">
                    <div class="flex flex-col">
                        <p x-on:click="step = 1"
                            class="text-xs font-bold text-white cursor-pointer xs:text-sm lg:text-xl">Ketua</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 1 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p x-on:click="step = 2"
                            class="text-xs font-bold text-white cursor-pointer xs:text-sm lg:text-xl">Anggota 1</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 2 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p x-on:click="step = 3"
                            class="text-xs font-bold text-white cursor-pointer xs:text-sm lg:text-xl">Anggota 2</p>
                        <div class="relative w-[80px] lg:w-[140px]  h-[2px] bg-white flex"
                            x-bind:class="step >= 3 ? 'bg-gradient-blue-r' : 'bg-white'">
                        </div>
                    </div>
                </div> --}}






                <div class="ml-[26px] mr-[24px] lg:ml-[108px] lg:mr-[128px]">
                    <form class="w-full" enctype="multipart/form-data" wire:submit.prevent="submit">
                        <div class="max-w-[362px] lg:max-w-[780px] w-full">



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="nama_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Tim
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_tim" id="nama_tim" wire:model="nama_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama tim kamu" required />
                                @error('nama_tim')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="alasan_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Apa
                                    alasan tim Anda mengikuti ISE! Data Science Academy?
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="alasan_tim" id="alasan_tim" wire:model="alasan_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan alasan kamu" required />
                                @error('alasan_tim')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="harapan_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Apa
                                    yang tim Anda harapkan dari ISE! Data Science Academy?
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="harapan_tim" id="harapan_tim" wire:model="harapan_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan harapan kamu" required />
                                @error('harapan_tim')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="tujuan_tim"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Apa
                                    yang dapat kamu lakukan dengan ilmu yang diperoleh pasca ISE! Data Science Academy?
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="tujuan_tim" id="tujuan_tim" wire:model="tujuan_tim"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Jelaskan untuk apa ilmu yang kamu dapatkan dari kegiatan ini"
                                    required />
                                @error('tujuan_tim')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <label for="sumber_informasi"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Darimana
                                    tim Anda mendapatkan informasi terkait ISE! Data Science Academy? <span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <select x-model="sumber_informasi" id="sumber_informasi" name="sumber_informasi"
                                    wire:model="sumber_informasi"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0  peer">
                                    <option selected class="bg-[#1C1C1C]">Dari mana kamu mendapat informasi ini?
                                    </option>
                                    <option value="sosial_media" class="bg-[#1C1C1C]">Media Sosial ISE!</option>
                                    <option value="media_partner" class="bg-[#1C1C1C]">Media Partner ISE!</option>
                                    <option value="sekolah" class="bg-[#1C1C1C]">Sekolah</option>
                                    <option value="teman_keluarga" class="bg-[#1C1C1C]">Teman/Keluarga</option>
                                    <option value="lainnya" class="bg-[#1C1C1C]">Lainnya</option>
                                </select>
                                @error('sumber_informasi')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror

                                <input wire:model="sumber_informasi_lainnya" x-on:input="sumber_informasi = 'lainnya'"
                                    x-show="sumber_informasi === 'lainnya'"
                                    class="mt-3 block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#4b4b4b] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    name="sumber_informasi_lainnya" type="text" id="sumber_informasi_lainnya"
                                    placeholder="Masukkan sumber informasi kamu">
                            </div>


                            <div class="flex items-center flex-row mt-[27px] mb-[20px] lg:mb-[39px] space-x-4 font-medium text-[11px] lg:text-[17px]"
                                x-bind:class="step == 1 ? '' : 'hidden'">
                                <input wire:model.defer="agree" type="checkbox" id="setuju-kebijakan"
                                    name="setuju-kebijakan"
                                    class="rounded-md cursor-pointer checked:bg-purple-200 checked:ring-purple-200 focus:ring-purple-200">
                                <label class="text-white " for="setuju-kebijakan">Dengan ini saya menyatakan bahwa tim
                                    saya siap mengikuti ISE! Data Science Academy serta siap mematuhi <a
                                        href="/terms-and-conditions" class="text-[#66C1A7]"
                                        target="_blank">peraturan</a> yang berlaku nantinya</label>
                                @error('agree')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="nama_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_ketua" id="nama_ketua"
                                    value="{{ auth()->user()->full_name }}"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="nama_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_anggota1" id="nama_anggota1"
                                    wire:model="nama_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap kamu" required />
                                @error('nama_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="nama_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Nama
                                    Lengkap <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="nama_anggota2" id="nama_anggota2"
                                    wire:model="nama_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama lengkap kamu" required />
                                @error('nama_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="univ_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Institusi
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_ketua" id="univ_ketua" value="{{ auth()->user()->institution }}"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama institusi kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="univ_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Institusi
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_anggota1" id="univ_anggota1"
                                    wire:model="univ_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama institusi kamu" required />
                                @error('univ_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="univ_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Asal
                                    Institusi
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="univ_anggota2" id="univ_anggota2"
                                    wire:model="univ_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama institusi kamu" required />
                                @error('univ_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="jurusan_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Jurusan
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="jurusan_ketua" id="jurusan_ketua"
                                    wire:model="jurusan_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama jurusan kamu" required />
                                @error('jurusan_ketua')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="jurusan_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Jurusan
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="jurusan_anggota1" id="jurusan_anggota1"
                                    wire:model="jurusan_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama jurusan kamu" required />
                                @error('jurusan_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="jurusan_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Jurusan
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="jurusan_anggota2" id="jurusan_anggota2"
                                    wire:model="jurusan_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nama jurusan kamu" required />
                                @error('jurusan_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="email_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_ketua" id="email_ketua" value="{{ auth()->user()->email }}"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="email_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_anggota1" id="email_anggota1"
                                    wire:model="email_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif kamu" required />
                                @error('email_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="email_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Email
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="email" name="email_anggota2" id="email_anggota2"
                                    wire:model="email_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan email aktif kamu" required />
                                @error('email_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="wasap_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Whatsapp
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="wasap_ketua" id="wasap_ketua" value="{{ auth()->user()->handphone }}"
                                    class="block py-0 px-0 w-full lg:w-[780px] text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nomor whatsapp aktif kamu" disabled />
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="wasap_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Whatsapp
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="wasap_anggota1" id="wasap_anggota1"
                                    wire:model="wasap_anggota1"
                                    class="block py-0 px-0 w-full lg:w-[780px] text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nomor whatsapp aktif kamu" required />
                                @error('wasap_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="wasap_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Whatsapp
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="wasap_anggota2" id="wasap_anggota2"
                                    wire:model="wasap_anggota2"
                                    class="block py-0 px-0 w-full lg:w-[780px] text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan nomor whatsapp aktif kamu" required />
                                @error('wasap_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="insta_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_ketua" id="insta_ketua" wire:model="insta_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram kamu" required />
                                @error('insta_ketua')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="insta_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_anggota1" id="insta_anggota1"
                                    wire:model="insta_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram kamu" required />
                                @error('insta_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[45px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="insta_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Instagram
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="insta_anggota2" id="insta_anggota2"
                                    wire:model="insta_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link Instagram kamu" required />
                                @error('insta_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-[15px] lg:mb-[30px] group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="twib_ketua"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_ketua" id="twib_ketua" wire:model="twib_ketua"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon kamu" required />
                                @error('twib_ketua')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[30px] group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="twib_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_anggota1" id="twib_anggota1"
                                    wire:model="twib_anggota1"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon kamu" required />
                                @error('twib_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-[15px] lg:mb-[30px] group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="twib_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[20px] font-medium text-white">Link
                                    Twibbon
                                    <span class="text-[#FF1F00]">*</span>
                                </label>
                                <input type="text" name="twib_anggota2" id="twib_anggota2"
                                    wire:model="twib_anggota2"
                                    class="block py-0 px-0 w-full text-[11px] lg:text-[18px] font-medium text-[#7C7C7C] bg-transparent border-0 border-b border-white appearance-none dark:text-white dark:border-white dark:focus:border-[#66C1A7] focus:outline-none focus:ring-0 peer"
                                    placeholder="Masukkan link postingan twibbon kamu" required />
                                @error('twib_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class="relative z-0 w-full mb-5 cursor-pointer group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="cv_ketua"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    CV <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="cv_ketua" id="cv_ketua" name="cv_ketua" required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.pdf)</div>
                                @error('cv_ketua')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-5 cursor-pointer group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="cv_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    CV <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="cv_anggota1" id="cv_anggota1" name="cv_anggota1" required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.pdf)</div>
                                @error('cv_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-5 cursor-pointer group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="cv_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    CV <span class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="cv_anggota2" id="cv_anggota2" name="cv_anggota2" required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.pdf)</div>
                                @error('cv_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>




                            <div class="relative z-0 w-full mb-3 cursor-pointer group"
                                x-bind:class="step == 2 ? '' : 'hidden'">
                                <label for="bukti_ketua"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="bukti_ketua" id="bukti_ketua" name="bukti_ketua" required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_ketua')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-3 cursor-pointer group"
                                x-bind:class="step == 3 ? '' : 'hidden'">
                                <label for="bukti_anggota1"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="bukti_anggota1" id="bukti_anggota1" name="bukti_anggota1"
                                            required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_anggota1')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative z-0 w-full mb-3 cursor-pointer group"
                                x-bind:class="step == 4 ? '' : 'hidden'">
                                <label for="bukti_anggota2"
                                    class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                    Bukti Mahasiswa S1/Sederajat (KTM/FRS/Transkrip Terbaru)<span
                                        class="text-[#FF1F00]">*</span>
                                </label>
                                <label
                                    class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                    <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                        <x-heroicon-s-cloud-arrow-up class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                        <input type='file'
                                            class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                            wire:model="bukti_anggota2" id="bukti_anggota2" name="bukti_anggota2"
                                            required />
                                    </div>
                                </label>
                                <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)</div>
                                @error('bukti_anggota2')
                                    <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="relative z-0 max-w-[362px] lg:max-w-[780px] w-full mb-[15px] lg:mb-[45px] lg:mt-[20px] group"
                                x-bind:class="step == 5 ? '' : 'hidden'">
                                <div class="relative z-0 w-[295px] lg:w-[780px] border-b border-transparent bg-transparent"></div>
                                <div class="text-white flex flex-col gap-y-10 font-montserrat text-xs leading-5 lg:text-[19px] font-medium w-full">
                                    <div>Harap lakukan transfer ke rekening berikut:</div>
                                    <div>BNI<br>1295633675 <br>a.n DEWI ANGELINE</div>
                                    <div>Jumlah yang harus dibayarkan: <br>Rp 30.000,00</div>
                                    <div>Format transfer (tulis di keterangan transfer):<br>nama acara_nama orang/tim
                                    </div>
                                    <div>
                                        <div class="relative z-0 w-full mb-3 cursor-pointer group"
                                            x-bind:class="step == 5 ? '' : 'hidden'">
                                            <label for="bukti_pembayaran"
                                                class="block leading-normal text-[12px] lg:text-[19px] font-medium text-white">
                                                Bukti Pembayaran<span class="text-[#FF1F00]">*</span>
                                            </label>
                                            <label
                                                class="mt-[13px] w-max px-2 py-1 lg:py-[4px] flex flex-col items-center bg-[#1C1C1C] text-blue rounded-[6px] shadow-lg border border-[#348BB6] cursor-pointer">
                                                <div class="flex flex-row items-center gap-1 hover:brightness-75">
                                                    <x-heroicon-s-cloud-arrow-up
                                                        class="w-4 h-4 text-slate-100 lg:w-8 lg:h-8" />
                                                    <input type='file'
                                                        class="block text-xs text-gray-500 cursor-pointer w-44 lg:w-56 lg:text-sm file:mr-0 lg:file:mr-4 file:py-1 lg:file:py-2 file:rounded-md file:border-0 file:text-xs lg:file:text-sm file:font-semibold file:bg-transparent file:text-white file:cursor-pointer "
                                                        wire:model="bukti_pembayaran" id="bukti_pembayaran"
                                                        name="bukti_pembayaran" required />
                                                </div>
                                            </label>
                                            <div class="text-slate-300 text-xs lg:text-sm mt-0.5">Max size 1mb (.jpg, .jpeg, .png)
                                            </div>
                                            @error('bukti_pembayaran')
                                                <span class="text-sm font-thin text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="flex flex-row gap-x-5">
                                <button x-show="step >= 2" @click.prevent=" step-- "
                                    class="text-white border-2 border-blue-300 hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md h-10 sm:h-12 lg:h-14 w-full px-5 py-2 lg:py-2.5 text-center hover:opacity-80">Back</button>
                                <button x-bind:class="step <= 4 ? '' : 'hidden'" @click.prevent=" step++ "
                                    class="text-white bg-gradient-blue-r hover:brightness-90 focus:ring-4 focus:outline-none font-semibold font-Inter rounded-md h-10 sm:h-12 lg:h-14 w-full px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-200 dark:focus:ring-[#348BB6] hover:opacity-80">Next</button>
                                    <button
                                    type="submit"
                                    x-bind:class="step == 5 ? '' : 'hidden'"
                                    wire:click="submit"
                                    class="rounded-md text-white font-semibold py-2.5 w-full text-xs sm:text-base lg:text-xl bg-gradient-to-r from-[#348BB6] to-[#CCE1F0] hover:brightness-75 h-10 sm:h-12 lg:h-14 flex justify-center items-center"
                                  >
                                    <span wire:loading.remove>Submit</span>
                                    <div
                                      wire:loading
                                      class="inline-block h-6 w-6 animate-spin rounded-full mt-1 brightness-90 border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                      role="status"
                                    >
                                      <span
                                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                                        >Loading...</span
                                      >
                                    </div>
                                  </button>
                                </div>
                        </div>
                    </form>


                    {{-- Footer Form --}}
                    <div class="mt-[38px] flex justify-between flex-row items-center">
                        <a href="https://wa.me/+6281332049750" class="items-center hover:brightness-90">
                            <img class="w-[45   px] h-[40px] lg:w-[55px] lg:h-[50px]  align-top hover:opacity-60"
                                src="{{ asset('/images/whatsapp.png ') }}">
                        </a>
                        <div class="flex flex-row items-center gap-2 md:gap-3 text-slate-300">
                            <a href="ttps://www.instagram.com/is_expo/">
                                <x-bi-instagram class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                            </a>
                            <a href="https://tiktok.com">
                                <x-bi-tiktok class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                            </a>
                            <a href="https://www.linkedin.com/company/ise-information-systems-expo-2023/">
                                <x-bi-linkedin class="w-4 h-4 hover:text-slate-400 md:w-5 md:h-5" />
                            </a>
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>
