import React from 'react';
function Blog(props) {
    const sidebar = (
        <ul>
            {props.posts.map((post) =>
                <li key={post.id}>
                    {post.title}
                </li>
            )}
        </ul>
    );
    const content = props.posts.map((post) =>
        <div key={post.id}>
            <h3>{post.title}</h3>
            <p>{post.content}</p>
        </div>
    );
    return (
        <div>
            {sidebar}
            <hr />
            {content}
        </div>
    );
}

const posts = [
    {id: 1, title: 'Привет, мир', content: 'Добро пожаловать в документацию React!'},
    {id: 2, title: 'Установка', content: 'React можно установить из npm.'}
];
export class History extends React.Component{
    render() {
        return(
            <div>
                <Blog posts={posts} />
            </div>
        );
    }
}