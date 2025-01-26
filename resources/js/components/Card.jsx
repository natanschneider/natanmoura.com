export function Card({ children }){
    return(
        <div className="border-2 border-slate-600 dark:border-slate-50 rounded-md overflow-hidden *:w-full">{ children }</div>
    )
}

export function CardLgLink({ title }){
    return(
        <div className="w-full flex justify-center border-t-2 border-slate-600 dark:border-slate-50 py-2">
            <p className="font-bold text-lg md:text-xl">{ title }</p>
        </div>
    )
}

export function CardTitle({ title }){
    return(
        <h2 className="text-lg md:text-xl mb-2 md:mb-3 font-semibold">{ title }</h2>
    )
}
