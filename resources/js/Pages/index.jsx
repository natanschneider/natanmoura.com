import { Layout } from '../layout.jsx'
import { Cards, Card, CardTitle, CardLgLink } from '../components/Card.jsx'

export default function index({ projects }){
    return(
        <Layout>
            <div className="container">
                { projects.length > 0 && (
                    <Cards>
                        { projects.map((item, index) => (
                            <Card key={ index }>
                                <a href={ item.link }>
                                    <CardTitle title={ item.title } />
                                </a>
                                <a href={ item.repository }>
                                    <CardLgLink title="Portfolio" />
                                </a>
                            </Card>
                        )) }
                    </Cards>
                )}
            </div>
        </Layout>
    )
}
