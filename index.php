<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Simple Convert</title>
		<link rel="stylesheet" href="./css/tailwind.css" />
		<!-- <link
			rel="stylesheet"
			href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css"
		/> -->
		<script>
			if (
				localStorage.getItem("color-theme") === "dark" ||
				(!("color-theme" in localStorage) &&
					window.matchMedia("(prefers-color-scheme: dark)").matches)
			) {
				document.documentElement.classList.add("dark");
			} else {
				document.documentElement.classList.remove("dark");
			}
		</script>
	</head>
	<body class="bg-slate-100 dark:bg-slate-900">
    <?php include './app.php'; ?>
		<div class="flex justify-center items-center min-h-screen">
			<div class="w-full md:w-5/12 lg:w-4/12">
				<div
					class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-200 rounded-md shadow-md p-10"
				>
					<h3
						class="text-3xl text-gray-900 dark:text-slate-100 tracking-widest text-center"
					>
						Simple Converter
					</h3>
					<hr class="border border-gray-300 dark:border-gray-100 my-10" />
					<form action="">
						<div class="relative z-0 mb-6 w-full group">
							<input
								type="number"
								name="angka"
								class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
								placeholder=" "
                value="<?= $angka ?>"
								required
								autofocus
							/>
							<label
								for="floating_email"
								class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
								>Insert Some Number....</label
							>
						</div>
            <div class="">
              <p class="text-gray-800 dark:text-slate-100"><?= !empty($angka) ? $terbilang : "";  ?></p>
            </div>
						<button
							class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 mt-5 w-full"
						>
							<span
								class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0 w-full"
							>
								Submit
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
		<div class="absolute bottom-6 right-6 z-50">
			<button
				id="theme-toggle"
				type="button"
				class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
			>
				<svg
					id="theme-toggle-dark-icon"
					class="hidden w-5 h-5"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
					></path>
				</svg>
				<svg
					id="theme-toggle-light-icon"
					class="hidden w-5 h-5"
					fill="currentColor"
					viewBox="0 0 20 20"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
						fill-rule="evenodd"
						clip-rule="evenodd"
					></path>
				</svg>
			</button>
		</div>
		<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
		<script src="./js/darkmode.js"></script>
	</body>
</html>
