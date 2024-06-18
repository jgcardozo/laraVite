<template>
    <div>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <slot></slot>
        </main>
        <footer>Footer</footer>
    </div>
</template>

<script>
export default {
    name: "Layout",
    
}
</script>