import { Layout } from '../layout.jsx'
import { Card, CardTitle, CardLgLink } from '../components/Card.jsx'

export default function index({ projects }){
    let i = 0;
    return(
        <Layout>
            { projects.map(item => (
                <Card key={ i++ }>
                    <a href={ item.link }>
                        <CardTitle title= { item.title} />
                    </a>
                    <a href={ item.repository }>
                        <CardLgLink title="Portfolio" />
                    </a>
                </Card>
            )) }
        </Layout>
    )
}
