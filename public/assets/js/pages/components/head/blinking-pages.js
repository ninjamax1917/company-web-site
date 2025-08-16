        // Немедленное применение сохранённой темы до загрузки стилей (устранить мигание)
        (function(){
            try {
                var t = localStorage.getItem('theme');
                if(t==='dark' || (!t && window.matchMedia('(prefers-color-scheme: dark)').matches)){
                    document.documentElement.classList.add('dark');
                }
            } catch(e) {}
        })();