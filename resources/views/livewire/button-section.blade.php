<div class="pt-20">
  
    <nav class="fixed top-0 right-0 w-full px-6 py-2 z-50 bg-blue-50 backdrop-blur-sm flex justify-between items-center shadow-sm h-20 overflow-visible">
      <!-- Left Side: Logo (floated, doesn't stretch nav) -->
            <div class="relative w-44 h-44 py-2 mt-8">
                <img src="{{ asset('image/logo.png') }}"
                    alt="KodigoUI Logo"
                    class="absolute -top-4 left-0 w-44 h-44 object-contain" />
            </div>
            
            <!-- Right Side: Search, Buttons, GitHub -->
            <div class="flex items-center space-x-6">
                <!-- Search -->
                <div x-data="{ open: false }" class="relative flex items-center space-x-2">
                <button @click="open = !open" class="p-2 rounded-full hover:bg-gray-300 transition" x-show="!open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="h-7 w-7 text-[#000034]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
            
                <div x-show="open" x-transition @click.away="open = false" class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-64 pl-10 pr-4 py-2 text-[#00001A] border border-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all duration-300 ease-in-out" />
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    </div>
                </div>
                </div>
            
                <!-- Buttons -->
                <x-button size="small" class="!w-[130px] hover:rotate-1 hover:scale-110 bg-[#000034]"
                @mouseenter="$el.classList.add('animate-pulse')"
                @mouseleave="$el.classList.remove('animate-pulse')"
                >
                Documentation
                </x-button>
            
                <a wire:navigate href="{{ route('getstarted') }}">
                <x-button size="small" class="hover:rotate-2 hover:scale-110 bg-[#000034]">
                    Get Started
                </x-button>
                </a>
            
                <!-- GitHub -->
                <a href="https://github.com/your-repo" target="_blank"
                class="flex items-center space-x-2 mb-2 p-1 rounded-full hover:bg-white transition-transform duration-300 hover:rotate-3 hover:scale-110">
                <img src="{{ asset('image/github-removebg-preview.png') }}" alt="GitHub Logo" class="w-8 h-8 shrink-0">
                </a>
            </div>
            </nav>
            
            
        
            
        <div class="flex min-h-screen w-full bg-blue-50">
            @livewire('leftpanel')
            
            <div class="h-screen overflow-y-auto scrollbar-invisible">
                <style>
                    .scrollbar-invisible::-webkit-scrollbar {
                    display: none;
                    }
                
                    .scrollbar-invisible {
                    -ms-overflow-style: none;  /* IE and Edge */
                    scrollbar-width: none;     /* Firefox */
                    }
                </style>
                <main class="flex-1 p-8 bg-blue-50 font-[Poppins]">
            <!-- Title -->
        <h1 class="text-2xl font-extrabold mb-4 text-gray-700" style="font-family: 'Arial Black', Arial, sans-serif;">
            Button Section
        </h1>
        
        <!-- Description -->
        <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-500 mb-6 max-w-2xl">
            KodigoUI offers a wide range of pre-styled button components built for modern, responsive interfaces. These buttons come with thoughtful design defaults including <strong>focus ring styles</strong> for accessibility and interaction feedback.
            <br><br>
            You can easily <strong>customize colors, sizes, and states</strong> using Tailwind utility classes or override the default styles with your own CSS. Whether you’re handling form submissions, actions, or navigation, our buttons are crafted for flexibility and ease of use.
            <br><br>
            Integrated with the <strong>TALL Stack</strong> (TailwindCSS, Alpine.js, Laravel, and Livewire), these buttons are ideal for real-time applications and dynamic UIs. Get started fast and tailor each component to your project’s branding and behavior.
        </p>
        
        <!-- Button Benefit Description -->
        <div class="bg-white border-l-4 border-[#00001A] p-4 rounded-md shadow-sm text-gray-600 text-[15px] font-[Poppins] leading-relaxed max-w-full">
            <strong class="text-gray-600">Why Use Custom Buttons?</strong><br>
            Buttons are fundamental to user interaction. KodigoUI provides versatile buttons with the following benefits:
            <ul class="list-disc pl-5 mt-2 space-y-1">
            <li><strong>Interactive Feedback:</strong> Built-in focus rings and hover states enhance usability.</li>
            <li><strong>Fully Customizable:</strong> Use Tailwind utilities or custom CSS to match your design system.</li>
            <li><strong>Reusable:</strong> Create consistent UI patterns across your app without rewriting code.</li>
            <li><strong>Livewire-Ready:</strong> Buttons work seamlessly with Livewire for real-time actions and feedback.</li>
            <li><strong>Accessible by Design:</strong> Designed with accessibility best practices for inclusive interfaces.</li>
            </ul>
        </div>
        
          
        <div class="space-y-4 mt-4">
            <div class="p-4 border rounded-lg shadow-sm bg-blue-50">
              <h2 class="text-lg font-semibold text-gray-700">Buttons</h2>
          
              <p class="text-[16px] leading-[1.32] font-normal text-gray-700 mt-1">
                KodigoUI buttons are fully customizable and built with accessibility in mind. You can easily modify button sizes, colors, and states using Tailwind utility classes. 
                Each button includes a <code>focus</code> ring for better usability and can be further styled or overridden with custom CSS to match your design system.
                <br><br>
                Need more control? Use props like <code>color</code> or <code>size</code> on the <code>&lt;x-button&gt;</code> component to quickly apply consistent styles.
              </p>
          
              <div x-data="{ showCode: false }" class="relative bg-[#000034] p-4 rounded-lg mt-4">
                 <!-- Show/Hide Code Button -->
                <button 
                @click="showCode = !showCode" 
                class="absolute top-2 right-4 text-sm text-blue-300 hover:text-white flex items-center gap-1"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4zm0 0a2 2 0 100 4H7a2 2 0 100-4z" />
                </svg>
                <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
            </button>

                <div class="grid grid-cols-7 gap-2 mt-6">
                <x-button size="small" color="success">success</x-button>
                <x-button size="small" color="information">information</x-button>
                <x-button size="small" color="yellow">yellow</x-button>
                <x-button size="small" color="error">error</x-button>
                <x-button size="small" color="green">green</x-button>
                <x-button size="small" color="gray">gray</x-button>
                <x-button size="small" color="orange">orange</x-button>
                <x-button size="small" color="blue">blue</x-button>
                <x-button size="small" color="gunmetal">gunmetal</x-button>
                <x-button size="small" color="teal">teal</x-button>
                <x-button size="small" color="cyan">cyan</x-button>
                <x-button size="small" color="pink">pink</x-button>
                <x-button size="small" color="purple">purple</x-button>
                <x-button size="small" color="rose">rose</x-button>
                <x-button size="small" color="lime">lime</x-button>
                <x-button size="small" color="indigo">indigo</x-button>
                <x-button size="small" color="amber">amber</x-button>
                <x-button size="small" color="neutral">neutral</x-button>
                <x-button size="small" color="stone">stone</x-button>
                <x-button size="small" color="zinc">zinc</x-button>
                <x-button size="small" color="sky">sky</x-button>
                <x-button size="small" color="lightblue">lightblue</x-button>
                <x-button size="small" color="red">red</x-button>
                <x-button size="small" color="bluegray">bluegray</x-button>
                <x-button size="small" color="deepblue">deepblue</x-button>
                <x-button size="small" color="lightgreen">lightgreen</x-button>

                <x-button size="small" color="emerald">emerald</x-button>
                <x-button size="small" color="primary">primary</x-button>
                <x-button size="small" color="secondary">secondary</x-button>
                <x-button size="small" color="accent">accent</x-button>
                <x-button size="small" color="muted">muted</x-button>
                <x-button size="small" color="steel">steel</x-button>
                <x-button size="small" color="crimson">crimson</x-button>

                <x-button size="small" color="carrot">carrot</x-button>
                <x-button size="small" color="aqua">aqua</x-button>
                <x-button size="small" color="salmon">salmon</x-button>
                <x-button size="small" color="lightgray">lightgray</x-button>
                <x-button size="small" color="charcoal">charcoal</x-button>


               </div>
                        <!-- Code Preview -->
                        <pre x-show="showCode" x-transition class="mt-6 text-sm text-white overflow-x-auto rounded bg-[#000034] p-4 leading-6">
                            <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>success</span>&quot;&gt;success<span class="text-[#10B981]">&lt;/x-button&gt;<br> </span> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>information</span>&quot;&gt;information <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>yellow</span>&quot;&gt;yellow <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>error</span>&quot;&gt;error <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>green</span>&quot;&gt;green <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>gray</span>&quot;&gt;gray <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>orange</span>&quot;&gt;orange <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>blue</span>&quot;&gt;blue <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>gunmetal</span>&quot;&gt;gunmetal <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>teal</span>&quot;&gt;teal <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>cyan</span>&quot;&gt;cyan <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>pink</span>&quot;&gt;pink <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>purple</span>&quot;&gt;purple <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>rose</span>&quot;&gt;rose <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>lime</span>&quot;&gt;lime <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>indigo</span>&quot;&gt;indigo <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>amber</span>&quot;&gt;amber <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>neutral</span>&quot;&gt;neutral <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>stone</span>&quot;&gt;stone <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>zinc</span>&quot;&gt;zinc <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>sky</span>&quot;&gt;sky <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>lightblue</span>&quot;&gt;lightblue <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>red</span>&quot;&gt;red <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>bluegray</span>&quot;&gt;bluegray <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>deepblue</span>&quot;&gt;deepblue <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>lightgreen</span>&quot;&gt;lightgreen <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>emerald</span>&quot;&gt;emerald <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>primary</span>&quot;&gt;primary <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>secondary</span>&quot;&gt;secondary <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>accent</span>&quot;&gt;accent <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>muted</span>&quot;&gt;muted <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>steel</span>&quot;&gt;steel <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>crimson</span>&quot;&gt;crimson <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>carrot</span>&quot;&gt;carrot <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>aqua</span>&quot;&gt;aqua <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>salmon</span>&quot;&gt;salmon <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>lightgray</span>&quot;&gt;lightgray <span class="text-[#10B981]">&lt;/x-button&gt;<br> </span>
                             <span class="text-[#10B981]"> &lt;x-button size=</span> &quot;<span style='color:#c084fc'>small</span>&quot; color=&quot;<span style='color:#60a5fa'>charcoal</span>&quot;&gt;charcoal&lt;/x-button&gt;
                        </pre>
                        

              </div>
            </div>
          
          
            <div class="p-4 border rounded-lg shadow-sm bg-green-50">
                <h2 class="text-lg font-semibold text-gray-700">Sample to custom or override the buttons</h2>
            
                <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                    KodigoUI buttons are designed to be flexible and developer-friendly. By default, each button comes with predefined sizing, padding, and colors based on the <code>size</code> and <code>color</code> props. However, if you need more control, you can easily override any of these styles.
                    <br><br>
                    For example, to change the width of a button, just apply your own utility class using Tailwind's <code class="font-bold">!</code> prefix for higher specificity, like <code class="font-bold">!w-60</code>. This tells Tailwind to apply your class with <code>!important</code>, overriding the internal component defaults.
                    <br><br>
                    ⚠️ <strong>Tip:</strong> Always prefix with <code class="font-bold">!</code> (like <code class="font-bold">!h-10</code>, <code class="font-bold">!px-4</code>, etc.) when overriding utility classes from a component that already applies fixed styles.
                </p>
            
                <div x-data="{ showCode: false }" class="relative bg-[#000034] p-4 rounded-lg mt-4">
                    <!-- Toggle Button -->
                    <button 
                        @click="showCode = !showCode" 
                        class="absolute top-4 right-4 text-sm text-blue-300 hover:text-white flex items-center gap-1"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m2 0a2 2 0 100-4H7a2 2 0 100 4zm0 0a2 2 0 100 4H7a2 2 0 100-4z" />
                        </svg>
                        <span x-text="showCode ? 'Hide Code' : 'Show Code'"></span>
                    </button>
                
                    <div class="flex flex-wrap gap-2">
                        <x-button size="regular" color="success">regular</x-button>
                        <x-button size="large" color="information">large</x-button>
                        <x-button size="small" color="error">small</x-button>
                        <x-button size="small" color="error" class="!w-60">!w-60 override</x-button>
                    </div>
                
                    <pre x-show="showCode" x-transition class="mt-6 text-sm text-white overflow-x-auto rounded bg-[#000034] p-4">
                      
                        <code>
                            <span style="color:#7dd3fc">&lt;</span><span style="color:#22c55e">x-button</span> <span style="color:#c084fc">size</span>=<span style="color:#93c5fd">"regular"</span> <span style="color:#60a5fa">color</span>=<span style="color:#93c5fd">"success"</span><span style="color:#7dd3fc">&gt;</span>regular<span style="color:#7dd3fc">&lt;/x-button&gt;</span>
                            <span style="color:#7dd3fc">&lt;</span><span style="color:#22c55e">x-button</span> <span style="color:#c084fc">size</span>=<span style="color:#93c5fd">"large"</span> <span style="color:#60a5fa">color</span>=<span style="color:#93c5fd">"information"</span><span style="color:#7dd3fc">&gt;</span>large<span style="color:#7dd3fc">&lt;/x-button&gt;</span>
                            <span style="color:#7dd3fc">&lt;</span><span style="color:#22c55e">x-button</span> <span style="color:#c084fc">size</span>=<span style="color:#93c5fd">"small"</span> <span style="color:#60a5fa">color</span>=<span style="color:#93c5fd">"yellow"</span><span style="color:#7dd3fc">&gt;</span>small<span style="color:#7dd3fc">&lt;/x-button&gt;</span>
                            <span style="color:#7dd3fc">&lt;</span><span style="color:#22c55e">x-button</span> <span style="color:#c084fc">size</span>=<span style="color:#93c5fd">"small"</span> <span style="color:#60a5fa">color</span>=<span style="color:#93c5fd">"error"</span> <span style="color:#38bdf8">class</span>=<span style="color:#93c5fd">"!w-60"</span><span style="color:#7dd3fc">&gt;</span>!w-60 override<span style="color:#7dd3fc">&lt;/x-button&gt;</span>
                        </code>
                    </pre>
                </div>
            </div>
            <div class="p-4 border rounded-lg shadow-sm bg-blue-50 mt-6">
                <h2 class="text-lg font-semibold text-gray-700">Why Use KodigoUI Buttons?</h2>
            
                <p class="text-[16px] leading-[1.32] font-normal tracking-[0em] text-gray-700 mt-1">
                    KodigoUI buttons are crafted to help you move fast while staying consistent. Each button comes with responsive spacing, semantic sizing, and built-in accessibility — allowing you to deliver a professional UI without repetitive setup.
                    <br><br>
                    Whether you're building modals, forms, alerts, or navigation actions, these components help reduce boilerplate and ensure your UI stays clean and maintainable.
                    <br><br>
                    
                </p>
            </div>
            
            
            </div>
          </main>
         @livewire('footer')
    </div>

    
    @livewire('rightpanel')
  
  </div>
  </div>