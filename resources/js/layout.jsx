export function Layout({ children }){
    return(
        <main
            className="bg-slate-50 dark:bg-slate-900 text-slate-600 dark:text-slate-50 flex flex-col items-center justify-center text-center"
        >{ children }</main>
    )
}
